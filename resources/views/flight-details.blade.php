@include( 'partial.header');

<main id="main" class="main" style="margin-right: 250px;">
    <!-- Flight Selection -->
    <h2 style="margin-left: 100px;">Flight Selection</h2>
    <!-- Display flight options here -->
    <form action="{{ route('saveDetailsAndRedirect', ['id' => $flight->id] ) }}" method="POST">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container-ws">
            <div class="row g-5">
                <div style="display: inline-flex;">
                    <div>

                        <div class="card-details-ws">
                            <div class="flight-card-ws">
                                <div class="block">
                                    <div>
                                        <h3>{{ $flight->flight_number }}</h3>
                                    </div>
                                    <div style="margin-right: 80px; margin-top: 50px;">
                                        <h4 style="margin-right: 10px;">{{ $flight->airline }}</h4>
                                    </div>
                                </div>

                                <div class="flight-details-ws">

                                    <div>

                                        <div class="flight-times-ws">
                                            <div class="depart">
                                                <!-- <span>{{ $flight->airline }}</span> -->
                                                <p class="flight-info-ws">{{ date('H:i', strtotime($flight->departure_time)) }}</p>
                                                <span>{{ $flight->departure_airport }}</span>
                                            </div>

                                            <p class="flight-infos-ws" style="font-size: 12px; margin-left: 20px;">{{ $flight->duration }}
                                            </p>
                                            <div class="flight-dot"></div>
                                            <div class="flight-dot"></div>
                                            <div class="flight-dot"></div>


                                            <div class="arrive">
                                                <!-- <span>{{ $flight->airline }}</span> -->
                                                <p class="flight-info-ws">{{ date('H:i', strtotime($flight->arrival_time)) }}</p>
                                                <span>{{ $flight->arrival_airport }}</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div style="margin-left: 50px;">
                            <input type="checkbox" name="" id="">
                            <span>Return(optional)</span>
                        </div>
                        <br>
                        <div class="card-details-ws">
                            <div class="flight-card-ws">
                                <div class="block">
                                    <div>
                                        <h3>{{ $flight->return_flight_number }}</h3>
                                    </div>
                                    <div style="margin-right: 80px; margin-top: 50px;">
                                        <h4 style="margin-right: 10px;">{{ $flight->return_airline }}</h4>
                                    </div>
                                </div>

                                <div class="flight-details-ws">
                                    <div>

                                        <div class="flight-times-ws">
                                            <div class="depart">
                                                <!-- <span>{{ $flight->airline }}</span> -->
                                                <p class="flight-info-ws">{{ date('H:i', strtotime($flight->return_departure_time)) }}</p>
                                                <span>{{ $flight->return_departure_airport }}</span>
                                            </div>

                                            <p class="flight-infos-ws" style="font-size: 12px; margin-left: 20px;">{{ $flight->return_duration }}
                                            </p>
                                            <div class="flight-dot"></div>
                                            <div class="flight-dot"></div>
                                            <div class="flight-dot"></div>


                                            <div class="arrive">
                                                <!-- <span>{{ $flight->return_airline }}</span> -->
                                                <p class="flight-info-ws">{{ $flight->return_arrival_time }}</p>
                                                <span>{{ $flight->return_arrival_airport }}</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <!-- Passenger Details -->
                        <h2>Passenger Details</h2>
                        <!-- <div class="white-boxs" style="justify-content: space-between; height: 300px;"> -->

                        <div class="row row-col-2" style="margin-right: 400px;">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Moustapha" value="{{ session('personalDetails.firstName') }}" style="width: 300px;" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Kolbassia" value="{{ session('personalDetails.lastName') }}" style="width: 300px; margin-right: 357px;" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="tel" class="form-control" name="contact" id="username" placeholder="+237697305245" value="{{ session('personalDetails.contact') }}" style="width: 300px;" required>
                                <div class="invalid-feedback">
                                    Your username is required.
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" value="{{ session('personalDetails.email') }}" style="width: 300px;">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- Add more fields for other passenger details -->
                        <br><br>
                        <h2>Additional Services</h2>
                        <!-- Add checkboxes or dropdowns for services -->
                        <section class="row row-cols-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Insurance
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <input type="radio" name="yes" id=""> Yes <br>
                                            <input type="radio" name="no" id=""> No
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Food Service
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form id="seatForm">
                                                <div class="seat-selection">
                                                    @for ($i = 1; $i <= 100; $i++) <div class="seat" data-seat="{{ $i }}">{{ $i }}</div>
                                                @endfor
                                                <input type="hidden" name="selectedSeat" id="selectedSeat">
                                                <button type="submit">Select Seat</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                    </div>
                    </section>
                    <br>
                    <!-- Confirmation -->

                    <!-- Display a summary of the booking details -->

                    <input type="submit" value="Confirm Booking" style="width: 600px;">


                </div>
                <div class="price" style="width: 300px; margin-left: -400px; margin-top: -50px;">
                    <div class="col-md-5 col-lg-4" style="width: 300px;">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">Your cart</span>
                            <span class="badge bg-primary rounded-pill">3</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Aller</h6>
                                    <small class="text-muted">From {{ $flight->departure_airport }} to {{ $flight->arrival_airport }}</small>
                                </div>
                                <span class="text-muted">{{ $flight->price }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Return</h6>
                                    <small class="text-muted">From {{ $flight->return_departure_airport }} to {{ $flight->return_arrival_airport }}</small>
                                </div>
                                <span class="text-muted">{{ $flight->return_price }}</span>
                            </li>
                            <!-- <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Third item</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">$5</span>
                            </li> -->
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>EXAMPLECODE</small>
                                </div>
                                <span class="text-success">−$5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (USD)</span>
                                <strong>{{ $flight->return_price }} + {{ $flight->price }}</strong>
                            </li>
                        </ul>

                        <form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</main>


@include('partial.footer')