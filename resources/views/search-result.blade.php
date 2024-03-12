@include('partial.header');
<main id="main" class="main">
    <div class="search-container sticky d-flex">
        <div class="search-form">
            <form class="d-flex justify-content-between align-items-center" action="{{ route('flight.search') }}" method="POST">
                @csrf

                <div class="search-input-group">
                    <input type="text" name="from" class="form-control form-control-sm" id="from" placeholder="From">
                </div>

                <div class="search-input-group">
                    <input type="text" name="to" class="form-control form-control-sm" id="to" placeholder="To">
                </div>

                <div class="search-input-group">
                    <input type="date" name="departure" class="form-control form-control-sm" id="departure" placeholder="Departure Date">
                </div>

                <div class="search-input-group">
                    <input type="date" name="arrival" class="form-control form-control-sm" id="arrival" placeholder="Arrival Date">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Search</button>
            </form>
        </div>
    </div>
    <div class="containers" id="">
        <section class="row row-cols-3" style="margin-left: -398px; margin-top: 70px; display:inline-block;">
            <div>
                <h6>Filter Search</h6>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            <input type="checkbox" name="" id=""> Canada Airline <br>
                            <input type="checkbox" name="" id=""> British Airline <br>
                            <input type="checkbox" name="" id=""> Camerco Airline <br>
                            <input type="checkbox" name="" id=""> Brusel Airline <br>
                            <input type="checkbox" name="" id=""> Ethiopian Airline <br>
                            <input type="checkbox" name="" id=""> Air France <br>
                            <input type="checkbox" name="" id=""> American Airline <br>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            Content for Accordion Item #2
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            Content for Accordion Item #3
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Accordion Item #4
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            Content for Accordion Item #4
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Accordion Item #5
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            Content for Accordion Item #5
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-left: 20px;">
            <div class="flight-cards">
                <div class="white-box">
                    <div class="option-buttons">
                        <div class="option-button active" data-filter="best">Best</div>
                        <div class="option-button" data-filter="cheaper">Cheapest</div>
                        <div class="option-button" data-filter="recommended">Recommended</div>
                    </div>
                </div>
                <!-- Flight cards and price cards go here -->
                @foreach ($flights as $flight)
                <div class="card-details" data-price="200" data-recommended="true">
                    <div class="flight-card">
                        <div style="margin-right: 80px; margin-top:40px;">
                            <h4 style="margin-right: 10px;">{{ $flight->airline }}</h4>
                        </div>
                        <div class="flight-details">
                            <div>

                                <div class="flight-times">
                                    <div class="depart">
                                        <span>{{ $flight->airline }}</span>
                                        <p class="flight-info">{{ date('H:i', strtotime($flight->departure_time)) }}</p>
                                        <span>{{ $flight->departure_airport }}</span>
                                    </div>

                                    <p class="flight-infos" style="font-size: 12px; margin-left: 20px;">{{ $flight->duration }}</p>
                                    <div class="flight-dot"></div>
                                    <div class="flight-dot"></div>
                                    <div class="flight-dot"></div>


                                    <div class="arrive">
                                        <span>{{ $flight->airline }}</span>
                                        <p class="flight-info">{{ date('H:i', strtotime($flight->arrival_time)) }}</p>
                                        <span>{{ $flight->arrival_airport }}</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="flight-card">
                        <div style="margin-right: 80px; margin-top:40px;">
                            <h4 style="margin-right: 10px;">{{ $flight->return_airline }}</h4>
                        </div>
                        <div class="flight-details">
                            <div>

                                <div class="flight-times">
                                    <div class="depart">
                                        <span>{{ $flight->return_airline }}</span>
                                        <p class="flight-info">{{ date('H:i', strtotime($flight->return_departure_time)) }}</p>
                                        <span>{{ $flight->return_departure_airport }}</span>
                                    </div>

                                    <p class="flight-infos" style="font-size: 12px; margin-left: 20px;">{{ $flight->return_duration }}</p>
                                    <div class="flight-dot"></div>
                                    <div class="flight-dot"></div>
                                    <div class="flight-dot"></div>


                                    <div class="arrive">
                                        <span>{{ $flight->return_airline }}</span>
                                        <p class="flight-info">{{ date('H:i', strtotime($flight->return_arrival_time)) }}</p>
                                        <span>{{ $flight->return_arrival_airport }}</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="price-card">
                    <div class="square">
                        <div class="inner">
                            <span class="deal">1 deal</span>
                            <div class="flight-price">{{ $flight->price }}</div>
                            <form action="{{ route('flight.show', ['id' => $flight->id]) }}" method="GET">
                                @csrf
                                <button class="book-button" type="submit">Select <i class="bi bi-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>
    </div>
</main>

@include('partial.footer');