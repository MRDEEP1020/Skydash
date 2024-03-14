<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;
use Carbon\Carbon;

class FlightSeeder extends Seeder
{
    public function run()
    {
        $flight = new Flight();
        $return_flight = new Flight();
        $flight->airline = 'Camerco Airway';
        $flight->return_airline = 'Air France';
        $flight->return_departure_airport = 'Paris';
        $flight->departure_airport = 'Douala';
        $flight->return_arrival_airport = 'Douala';
        $flight->arrival_airport = 'Paris';
        $flight->return_departure_date = '2024-04-1';
        $flight->departure_date = '2024-03-20';
        $flight->return_departure_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random departure time without seconds
        $flight->departure_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random departure time without seconds
        $flight->return_arrival_date = '2024-03-27';
        $flight->arrival_date = '2024-03-22';
        $flight->return_arrival_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random arrival time without seconds
        $flight->arrival_time = Carbon::createFromTime(rand(0, 23), rand(0, 59))->format('H:i'); // Random arrival time without seconds
        $flight->return_duration = '0h 0m';
        $flight->duration = '0h 0m';
        $flight->return_price = '400,000 F';
        $flight->price = '500,000 F';
        $flight->save();
    }
}
