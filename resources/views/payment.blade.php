@include('partial.header')

<main id="main" class="main" style="margin-right: 250px;">
    <div class="container-ws">
        <div class="row g-5">
            <div style="display: inline-flex">
                <div>
                    <div class="card-details-ws">
                        <div class="flight-card-ws">
                            <div class="block">
                                <div>
                                    <h3>@if ($flight)
                                        <h3>{{ $flight->flight_number }}</h3>
                                        <!-- Other flight details here -->
                                        @endif
                                    </h3>
                                </div>
                                <div style="margin-right: 80px; margin-top: 50px">
                                    <h4 style="margin-right: 10px">{{ $flight->airline }}</h4>
                                </div>
                            </div>

                            <div class="flight-details-ws">
                                <div>
                                    <div class="flight-times-ws">
                                        <div class="depart">
                                            <span>{{ $flight->airline }}</span>
                                            <p class="flight-info-ws">{{ $flight->departure_time }}</p>
                                            <span>{{ $flight->departure_airport }}</span>
                                        </div>

                                        <p class="flight-infos-ws" style="font-size: 12px; margin-left: 20px">
                                            {{ $flight->duration }}
                                        </p>
                                        <div class="flight-dot"></div>
                                        <div class="flight-dot"></div>
                                        <div class="flight-dot"></div>

                                        <div class="arrive">
                                            <span>{{ $flight->airline }}</span>
                                            <p class="flight-info-ws">{{ $flight->arrival_time }}</p>
                                            <span>{{ $flight->arrival_airport }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Passenger Information -->
                    <h2>Passenger Information</h2>
                    <!-- Display passenger information here -->
                    <div>
                        <ul style="display: inline-block">
                            <h6>Name: {{ session('personalDetails.firstName') }} {{ session('personalDetails.lastName') }}</h6>
                            <h6>Email: {{ session('personalDetails.email') }}</h6>
                            <h6>Date of birth: Mon 07 October 2000</h6>
                            <h6>Contact: {{ session('personalDetails.contact') }}</h6>
                        </ul>
                    </div>
                    <!-- Additional Services -->
                    <h2>Additional Services</h2>
                    <!-- Display additional services here -->
                    <div>
                        <h6>Insurance: $24</h6>
                    </div>
                    <!-- Payment -->
                    <h2>Payment</h2>
                    <div class="my-3">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required />
                            <label class="form-check-label" for="credit">Credit card</label>
                        </div>
                        <div class="form-check">
                            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required />
                            <label class="form-check-label" for="debit">Debit card</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required />
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('book.flight') }}" method="POST">
                        @csrf
                        <label for="flight_id">Select a Flight:</label>
                        <select name="flight_id" id="flight_id">

                            <option value="{{ $flight->id }}">{{ $flight->flight_number }}</option>
                        </select>
                        <br>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <br>
                        <button type="submit">Book Flight</button>
                    </form>



                    <br />
                    <!-- Display confirmation message here -->
                    <input type="submit" value="Confirm Booking" style="width: 200px" />

                </div>
            </div>
        </div>
    </div>
</main>
<script>
    var stripe = Stripe('YOUR_STRIPE_PUBLIC_KEY');
    var elements = stripe.elements();

    var cardElement = elements.create('card');
    cardElement.mount('#cc-number');

    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(cardElement).then(function(result) {
            if (result.error) {
                console.error(result.error.message);
            } else {
                var token = result.token.id;

                // Send the token to your server to process the payment
                fetch('/process-payment', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        token: token,
                        amount: 2450, // Replace with actual flight price
                        description: 'Flight booking'
                    })
                }).then(function(response) {
                    if (response.ok) {
                        // Payment successful, redirect or show success message
                    } else {
                        console.error('Failed to process payment');
                    }
                });
            }
        });
    });
</script>

@include('partial.footer')