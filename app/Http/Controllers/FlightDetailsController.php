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
            return redirect()->back()->with('error', 'Flight not found.');
        }

        return view('flight-details', ['flight' => $flight]);
    }

    public function book(Request $request, $id)
    {
        // Logic to handle the booking process
        // This could include validating the form, creating a new booking record, etc.

        return redirect()->back()->with('message', 'Flight booked successfully.');
    }

    public function saveDetailsAndRedirect(Request $request, $id)
    {
        // Retrieve the flight information based on the ID
        $flight = Flight::find($id);

        if (!$flight) {
            // Flight not found, handle the error
            return redirect()->back()->with('error', 'Flight not found.');
        }


        // Save the personal details to the session
        session([
            'personalDetails' => [
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'contact' => $request->contact,
                'email' => $request->email,
            ]
        ]);

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
