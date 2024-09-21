<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ ('assets/css/facualityreg.css') }}">
</head>
<body>
    <div class="container">
        <h1>Register company</h1>
        <form action="{{url('registercompany')}}" method="POST">
            @csrf
            <label for="name">Company Name:</label>
            <input type="text" id="name" name="companyname" required>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phonenumber" minlength="10" maxlength="10" required>
            
            <label for="relationship">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Submit</button>
        </form>
        <div class="message">
            <p>Not a member? <a href="#">Sign up here</a></p>
        </div>
    </div>
</body>
</html>
