<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'price',
        'return_price',
        'activation_token',
        'active',
        'total_price',
    ];

    protected static function booted()
    {
        static::creating(function ($return_flight) {
            $return_lastFlight = static::orderBy('id', 'desc')->first();
            $return_lastId = $return_lastFlight ? intval(substr($return_lastFlight->return_flight_number, 2)) : 0;
            $return_letter = chr(rand(65, 90)); // Generate a random uppercase letter (ASCII 65-90)
            $return_flight->return_flight_number = $return_letter . str_pad($return_lastId + 1, 3, '0', STR_PAD_LEFT);

        });
        
        static::creating(function ($flight) {
            $lastFlight = static::orderBy('id', 'desc')->first();
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

    

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
