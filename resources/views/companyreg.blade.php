<!DOCTYPE html>
<html>
<head>
    <title>Company Registration</title>
    <link rel="stylesheet"  href="{{ ('assets/css/companyregdesign.css') }}">
</head>
<body>
@if(session('message'))

<div class="alert alert-success">{{session('message')}}</div>

@endif
<div class="container">
    <h1>Company Registration</h1>

    <form action="{{url('companydet')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" class="form-control" id="company_name" name="companyname" required>
        </div>
        <div class="form-group">
            <label for="company_registration_number">Company Registration Number</label>
            <input type="text" class="form-control" id="company_registration_number" name="companyregistrationnumber" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phonenumber" minlength="10" maxlength="10" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="pincode">Pincode</label>
            <input type="text" class="form-control" id="pincode" name="pincode"  minlength="6" maxlength="6"required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Register Company</button>
</div>
</form>
<form action="{{url('companylogin')}}" method="POST">
<button type="submit" class="login">Login</button>
</form>
</body>
</html>
