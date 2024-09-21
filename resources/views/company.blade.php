<!-- resources/views/emails/registration.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
</head>
<body>
    <h1>Hello, {{ $details['companyname'] }}</h1>
    <p>Thank you for registering with us!</p>
    <p>Your registration details are:</p>
    <ul>
        <li><strong>Email:</strong> {{ $details['email'] }}</li>
        <li><strong>Phone:</strong> {{ $details['phonenumber'] }}</li>
    </ul>
    <p>If you have any questions, feel free to contact us.</p>
    <p>Best regards,</p>
    <p>The Team</p>
</body>
</html>
