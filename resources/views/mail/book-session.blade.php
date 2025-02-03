<!DOCTYPE html>
<html>
<head>
    <title>New Session Booking</title>
</head>
<body>
    <h2>New Booking Request</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Mobile:</strong> {{ $data['mobile'] }}</p>
    <p><strong>School Name:</strong> {{ $data['school_name'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>

    <p>Thank you!</p>
</body>
</html>
