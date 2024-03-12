<!DOCTYPE html>
<html>
<head>
    <title>Activate Your Account</title>
</head>
<body>
    <h1>Activate Your Account</h1>
    <p>Click the button below to activate your account:</p>
    <a href="{{ $url }}" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Activate Account</a>
    <p>If the button above does not work, you can also copy and paste the following URL into your browser:</p>
    <p><a href="{{ $url }}">{{ $url }}</a></p>
    <p>If you did not receive the activation email, you can <a href="{{ route('resendActivationLink') }}">click here</a> to resend it.</p>
</body>
</html>
