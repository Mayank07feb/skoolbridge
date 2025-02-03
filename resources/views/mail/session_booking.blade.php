<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Session Booking Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3B7CB8; /* Background color */
            margin: 0;
            padding: 0;
            color: #fff; /* Text color */
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 30px auto;
            background-color: #fff;
            color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #3B7CB8;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .strong {
            font-weight: bold;
            color: #333;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 30px;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Session Booking Request</h2>
        <p><span class="strong">Name:</span> {{ $data['name'] }}</p>
        <p><span class="strong">Email:</span> {{ $data['email'] }}</p>
        <p><span class="strong">Mobile:</span> {{ $data['mobile'] }}</p>
        <p><span class="strong">School Name:</span> {{ $data['school_name'] }}</p>
        <p><span class="strong">Address:</span> {{ $data['address'] }}</p>
        <p><span class="strong">Message:</span> {{ $data['message'] }}</p>
    </div>
    <div class="footer">
        <p>Thank you for your request. We will get back to you soon.</p>
    </div>
</body>
</html>
