<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingReceipt;


class BookingController extends Controller
{

    public function bookFlight(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        // Find the flight
        $flight = Flight::find($validatedData['flight_id']);
        if (!$flight) {
            return redirect()->back()->with('error', 'Flight not found.');
        }

        // Additional booking logic here (e.g., save booking to database)

        return redirect()->route('thank-you')->with('success', 'Booking successful!');
    }


    public function thankYou(Request $request)
    {
        // Assuming you have stored the booking details in the session
        $bookingDetails = session('bookingDetails');
        $flight = $bookingDetails['flight_id'];
        $name = $bookingDetails['name'];
        $email = $bookingDetails['email'];

        // Send email
        Mail::to($email)->send(new BookingReceipt($flight, $name, $email));

        // Return the receipt view
        return view('receipt', compact('flight', 'name', 'email'));
    }

    public function showReceipt()
    {
        // You can pass any necessary data to the view here
        return view('receipt');
    }
}
