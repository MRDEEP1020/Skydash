<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .actions {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        button.print {
            background-color: #28a745;
        }

        button.email {
            background-color: #ffc107;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Booking Receipt</h1>
        <p>Thank you for your booking!</p>
        <p><strong>Flight Number:</strong> {{ $flight->flight_number }}</p>
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Date:</strong> {{ now()->format('Y-m-d H:i:s') }}</p>
    </div>
    <div class="actions">
        <button class="print" onclick="window.print()">Print</button>
        <button class="email" onclick="sendEmail('{{ $email }}')">Email</button>
    </div>

    <script>
        function sendEmail(email) {
            // You can implement the logic to send an email here
            alert(`Email sent to ${email}`);
        }
    </script>
</body>

</html>
