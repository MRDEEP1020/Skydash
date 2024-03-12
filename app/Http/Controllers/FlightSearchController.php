<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class FlightSearchController extends Controller
{
    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'from' => 'required',
            'to' => 'required',
            'departure' => 'required|date',
            'arrival' => 'required|date',
        ]);

        $from = $validatedData['from'];
        $to = $validatedData['to'];
        $departureDate = $validatedData['departure'];
        $arrivalDate = $validatedData['arrival'];

        $flights = Flight::where('departure_airport', $from)
            ->where('arrival_airport', $to)
            ->whereDate('departure_date', '>=', $departureDate)
            ->whereDate('arrival_date', '<=', $arrivalDate)
            ->get();

        return view('search-result', ['flights' => $flights]);
    }


    public function selectFlight($destination)
    {
        $flights = Flight::where('arrival_airport', $destination)->get(); // Assuming 'destination' is a column in your flights table
    
        // Optional filtering based on additional criteria (e.g., departure date, price range)
        // $flights = $flights->where('departure_date', '>=', Carbon::today());  // Filter flights departing today or later
    
        if ($flights->isEmpty()) {
            // Handle no flights found scenario (e.g., display message, redirect)
            return view('no-flights-found'); // Hypothetical view
        } else {
            return view('search-result', ['flights' => $flights]);
        }
    }
    



    public function bookFlight(Request $request, $id)
    {
        // Find the selected flight
        $flight = Flight::find($id);

        // Store the selected flight in the session
        $request->session()->put('selected_flight', $flight);

        return redirect()->route('booking');
    }

    // public function confirmBooking(Request $request)
    // {
    //     // Validate the booking form data
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'payment_method' => 'required',
    //     ]);

    //     // Retrieve the selected flight from the session
    //     $flight = $request->session()->get('selected_flight');

    //     // Create a booking record
    //     $booking = new Booking();
    //     $booking->flight_id = $flight->id;
    //     $booking->name = $validatedData['name'];
    //     $booking->email = $validatedData['email'];
    //     $booking->phone = $validatedData['phone'];
    //     $booking->payment_method = $validatedData['payment_method'];
    //     $booking->save();

    //     // Clear the selected flight from the session
    //     $request->session()->forget('selected_flight');

    //     return redirect()->route('booking.confirmation')->with('message', 'Booking confirmed!');
    // }

    public function booking(Request $request)
    {
        // Retrieve the selected flight from the session
        $flight = $request->session()->get('selected_flight');

        // Perform any additional logic for the booking process
        // For example, you can validate the form data, create a new booking record, etc.

        // Clear the selected flight from the session
        $request->session()->forget('selected_flight');

        // Redirect to a confirmation page or any other page as needed
        return redirect()->route('booking.confirmation')->with('message', 'Booking confirmed!');
    }

    public function show($id)
    {
        $flight = Flight::find($id);
        if (!$flight) {
            return redirect()->back()->with('error', 'Flight not found.');
        }

        if (Auth::check()) {
            return view('flight-details', ['flight' => $flight]);
        } else {
            return redirect()->route('login')->with('error', 'Please log in to view this page.');
        }
    }



    public function payment(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'nullable|email',
            // Add other validation rules for personal details
        ]);

        // Store the personal details in the session
        $request->session()->put('personalDetails', [
            'firstName' => $validatedData['firstName'],
            'lastName' => $validatedData['lastName'],
            'contact' => $validatedData['contact'],
            'email' => $validatedData['email'],
        ]);

        // Redirect to the payment page
        return redirect()->route('payment')->with('personalDetails', $validatedData);
    }
}
