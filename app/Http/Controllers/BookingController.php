<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingReceipt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{

    public function selectSeat(Request $request, $flightId)
    {
        $flight = Flight::findOrFail($flightId);
        $availableSeats = $flight->getAvailableSeats(); // Replace with your logic to retrieve available seats

        return view('booking.selectSeat', compact('flight', 'availableSeats'));
    }

    public function bookFlight(Request $request)
    {
        
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'flight_id' => 'required|exists:flights,id',
            'name' => 'required|string',
            'email' => 'email',
        ]);

        

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Find the selected flight
        $flight = Flight::find($request->flight_id);

        if (!$flight) {
            return redirect()->with('error', 'Flight not found.');
        }

        // Process booking logic (assuming sufficient seat availability)
        $booking = new Booking;
        $booking->flight_id = $flight->id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->save();

        // Success message and redirection (replace with your desired action)
        return redirect()->route('receipt', $booking->id)->with('success', 'Flight booked successfully!');
    }


    public function thankYou(Request $request)
    {
        $flight = Flight::find($request->flight_id);

        if (!$flight) {
            return redirect()->with('error', 'Flight not found.');
        }

        // 1. Check for booking ID in route or session (prioritize route)
        $bookingId = $request->route('id'); // Assuming the ID is passed in the route

        if (!$bookingId) {
            $bookingDetails = session()->get('bookingDetails');
            if ($bookingDetails) {
                $bookingId = $bookingDetails['booking_id']; // Assuming booking ID is stored in session
            }
        }

        // 2. Retrieve booking details (if ID found)
        if ($bookingId) {
            $booking = Booking::find($bookingId);

            if ($booking) {
                $flight = $booking->flight;
                $name = $booking->name;
                $email = $booking->email;
            } else {
                // Handle case where booking ID is invalid (redirect or error message)
                return redirect()->with('error', 'Invalid booking ID.');
            }
        } else {
            // Handle case where neither route parameter nor session data is available
        }

        // 3. Process booking logic (assuming already handled in another function)

        try {
            $name = session('firstName'); // Retrieve name from session
            $email = session('email'); // Retrieve name from session

            // 1. Create BookingReceipt instance
            $bookingReceipt = new BookingReceipt($flight, $name, $email);
        
            // 2. Send email using Laravel Mail facade
            Mail::to($email)->send($bookingReceipt);
        
            // 3. Clear session data after successful processing
            session()->forget('bookingDetails');
        
            // 4. Return receipt view with success message
            return view('receipt', compact('flight', 'name', 'email'))
                ->with('success', 'Booking confirmation and receipt have been sent to your email.');
        } catch (\Throwable $e) {
            // 5. Handle potential errors
        
            // 5.1 Log the error
            Log::error('Error sending booking receipt email:', [
                'exception' => $e,
                'flight' => $flight,
                'name' => $name,
                'email' => $email,
            ]);
        
            // 5.2 Display a user-friendly error message
            return view('receipt', compact('flight', 'name', 'email'))
                ->with('error', 'There was a problem sending your booking confirmation. Please try again later.');
        }
        

        return view('receipt', ['flight' => $flight]);
    }


    public function showReceipt()
    {
        // You can consider checking for valid session data or redirecting appropriately here

        // ... logic to display a generic receipt or handle empty data
        return view('receipt');
    }
}
