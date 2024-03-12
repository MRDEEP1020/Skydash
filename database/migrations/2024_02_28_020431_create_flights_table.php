<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('airline');
            $table->string('return_airline');
            $table->string('return_departure_airport');
            $table->string('return_departure_time'); // Separate return_time column for return_departure time
            $table->string('departure_airport');
            $table->string('return_arrival_time');// Separate return_time column for return_arrival time
            $table->string('return_arrival_date');
            $table->string('return_departure_date');
            $table->string('arrival_airport');
            $table->string('return_arrival_airport');
            $table->date('departure_date');
            $table->time('departure_time'); // Separate time column for departure time
            $table->date('arrival_date');
            $table->time('arrival_time'); // Separate time column for arrival time
            $table->string('flight_number');
            $table->string('return_flight_number');
            $table->string('duration');
            $table->string('return_duration'); // return_duration time
            $table->string('price');
            $table->string('return_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
