<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use Carbon\Carbon;

class CrudController extends Controller
{
    //
    public function flightList()
    {
      $flights = Flight::all(); // Fetch all flights
      return view('crud', compact('flights')); // Pass flights to the view
    }
    

    public function addFlight(Request $request)
    {

        $request->validate([
            'flight_number',
            'return_flight_number',
            'airline',
            'return_airline',
            'departure_airport',
            'return_departure_airport',
            'arrival_airport',
            'return_arrival_airport',
            'departure_date',
            'return_departure_date',
            'departure_time',
            'return_departure_time',
            'arrival_time',
            'return_arrival_time',
            'arrival_date',
            'return_arrival_date',
            'duration',
            'return_duration',
            'price' => 'required|numeric',
            'return_price' => 'required|numeric',
            'total_price',
            'discount',
            'promo_code' => 'nullable|string', // Allow promo code to be optional

        ]);
        $flight = new Flight();
        $return_flight = new Flight();
        $flight->airline = $request->airline;
        $flight->return_airline = $request->return_airline;
        $flight->return_departure_airport = $request->return_departure_airport;
        $flight->departure_airport = $request->departure_airport;
        $flight->return_arrival_airport = $request->return_arrival_airport;
        $flight->arrival_airport = $request->arrival_airport;
        $flight->return_departure_date = $request->return_departure_date;
        $flight->departure_date = $request->departure_date;
        $flight->return_departure_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random departure time without seconds
        $flight->departure_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random departure time without seconds
        $flight->return_arrival_date = $request->return_arrival_date;
        $flight->arrival_date = $request->arrival_date;
        $flight->return_arrival_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random arrival time without seconds
        $flight->arrival_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random arrival time without seconds
        $flight->return_duration = $request->return_duration;
        $flight->duration = $request->duration;
        $flight->price = $request->price;
        $flight->return_price = $request->return_price;
        $flight->total_price = $flight->price + $flight->return_price;
        // Retrieve promo code (if entered)
        $promoCode = $request->input('promo_code');

        // Format price using the user's preferred currency (assuming a formatPrice function)
        $flight->discount = 0; // Initialize discount amount

        if ($promoCode) {
            // Replace this placeholder with your actual promo code validation logic
            if ($this->validatePromoCode($promoCode)) {
                $discount = 5; // Assuming a fixed $5 discount for now
            }
        }

        // Calculate total price with discount (if applicable)
        $totalPrice = $flight->price + $flight->return_price - $discount;
        $flight->total_price = $totalPrice;

        // ... (handle successful save, e.g., redirect) ...

        // Save the flight
        $flight->save();

        return redirect('/crud');
    }



    protected static function booted()
    {
        Flight::creating(function ($flight) {
            // Generate a unique flight number (example using random characters and ID)
            $lastFlight = Flight::orderBy('id', 'desc')->first();
            $lastId = $lastFlight ? intval(substr($lastFlight->flight_number, 2)) : 0;
            $letter = chr(rand(65, 90)); // Generate a random uppercase letter (ASCII 65-90)
            $flight->flight_number = $letter . str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);

            // Calculate and set the duration
            $departure = new \DateTime($flight->departure_date . ' ' . $flight->departure_time);
            $arrival = new \DateTime($flight->arrival_date . ' ' . $flight->arrival_time);
            $interval = $arrival->diff($departure);
            $duration = $interval->format('%hh %im');

            $flight->departure_time = $departure->format('H:i');
            $flight->duration = $duration;

            // Calculate and set the duration
            $return_departure = new \DateTime($flight->return_departure_date . ' ' . $flight->return_departure_time);
            $return_arrival = new \DateTime($flight->return_arrival_date . ' ' . $flight->return_arrival_time);
            $interval = $return_arrival->diff($return_departure);
            $return_duration = $interval->format('%hh %im');

            $flight->return_departure_time = $departure->format('H:i');
            $flight->return_duration = $return_duration;
        });
    }

    private function validatePromoCode($promoCode)
    {
        // Implement your validation logic here, e.g., checking against a database of valid codes
        // For simplicity, assume a hardcoded valid code for this example
        return $promoCode === 'EXAMPLECODE';
    }

    
    

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
