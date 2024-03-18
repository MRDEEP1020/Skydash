<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class FlightDetailsController extends Controller
{
    public function show($id)
    {
        $flight = Flight::find($id);
        if (!$flight) {
            return redirect()->with('error', 'Flight not found.');
        }

        return view('flight-details', ['flight' => $flight]);
    }

    public function book(Request $request, $id)
    {
        // Logic to handle the booking process
        // This could include validating the form, creating a new booking record, etc.

        return redirect()->with('message', 'Flight booked successfully.');
    }

    public function selectSeat(Request $request, $flightId)
    {
        $flight = Flight::findOrFail($flightId);
        $availableSeats = $flight->getAvailableSeats(); // Replace with your logic to retrieve available seats

        return view('booking.selectSeat', compact('flight', 'availableSeats'));
    }
    public function saveDetailsAndRedirect(Request $request, $id)
    {
        // Retrieve the flight information based on the ID
        $flight = Flight::find($id);

        if (!$flight) {
            // Flight not found, handle the error
            return redirect()->with('error', 'Flight not found.');
        }

        $this->validate($request, [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            // 'contact' => 'required|string|unique:users', // Adjust validation rules as needed
            'email' => 'email|unique:users', // Adjust validation rules as needed
        ]);

        // Access submitted data
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $contact = $request->contact;
        $email = $request->email;

        // Store in the session
        $request->session()->put('personalDetails', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'contact' => $contact,
            'email' => $email,
        ]);
        // dd(session('personalDetails'));
        $sessionData = session()->all();
        // Check if seat selection is complete (replace with your logic)
        if (!session()->has('seatSelected')) {
            return redirect()->route('booking.selectSeat', $id) // Redirect to seat selection page
                ->with('error', 'Please select a seat before continuing.');
        }


        // dd($flight);
        // Redirect the user to the payment page
        return view('payment', ['flight' => $flight]);
    }


    public function showPaymentPage(Request $request)
    {
        $flight_id = $request->flight_id;
        $flight = Flight::find($flight_id);
        $flightPrice = str_replace([' ', ',', 'F'], '', $request->price);


        if (!$flight) {
            return response()->json(['message' => 'Flight not found'], 404);
        }

        Stripe::setApiKey(config('services.stripe.secret'));

        $flightPrice = $flight->price; // Assuming the flight price is stored in the 'price' column of the Flight model
        $intent = PaymentIntent::create([
            'amount' => $flightPrice,
            'currency' => 'usd',
            'payment_method_types' => ['card'],
            'confirmation_method' => 'automatic',
            'confirm' => true,
            'metadata' => [
                'order_id' => $request->order_id,
            ],
        ]);

        if ($intent->status === 'succeeded') {
            // Payment was successful, update your database or perform other actions
            return response()->json(['message' => 'Payment successful'], 200);
        } else {
            return response()->json(['message' => 'Payment failed'], 400);
        }
    }
}
