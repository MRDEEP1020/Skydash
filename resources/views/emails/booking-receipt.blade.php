@subject Booking Receipt for your Flight

Hi {{ $data['firstName'] }},

Thank you for booking your flight with us!

Here are your booking details:

* Flight Number: {{ $data['flight_number'] }}
* Name: {{ $data['firstName'] }} {{ $data['lastName'] }} (if available)
* Email: {{ $data['email'] }}
* Date: {{ $data['date'] }}

We hope you have a pleasant journey!

Sincerely,

The [Your Company Name] Team
