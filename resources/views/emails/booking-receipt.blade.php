<!DOCTYPE html>
<html>
<head>
    <title>Booking Receipt</title>
</head>
<body>
    <h1>Booking Receipt</h1>
    <p>Thank you for your booking!</p>
    <p><strong>Flight Number:</strong> {{ $flight->flight_number }}</p>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Date:</strong> {{ now()->format('Y-m-d H:i:s') }}</p>
</body>
</html>
