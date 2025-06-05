<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h2>Hello {{ $name }},</h2>
    <p>Thank you for your booking.</p>
    <p>Your 4-digit confirmation code is: <strong>{{ $otp }}</strong></p>
    <p>Please keep it safe and show it at check-in.</p>
    <br>
    <p>Regards,<br>Hotel Management</p>
</body>
</html>
