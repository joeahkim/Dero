<!DOCTYPE html>
<html>

<head>
    <title>Booking Receipt</title>
</head>

<body>
    <p>Dear {{ $booking->client->name }},</p>
    <p>Thank you for booking with Derrique Homes and Travels.</p>
    <p>Attached is your booking receipt.</p>
    <p>We look forward to serving you again!</p>
    <br>
    <p>Best regards,</p>
    <p>Derrique Homes and Travels Team</p>
</body>

</html>