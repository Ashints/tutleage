<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet"  type="text/css" href="{{ ('assets/css/index1.css') }}">
</head>
<body >
<div class="container">
<div>
<?php
if(isset($_POST['create']))
{
    echo 'user submitted';
}
?>
</div>
    <form class="abc" action="{{url('update/{id}')}}" method="POST">
            @csrf
       
                <h1>Edit and Update data into database</h1>
                <p>fill up the form with correct values</p>
            <hr>
                <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" type="text" value="{{$user->firstname}}" name="firstname" required><br><br>

                
                    <label for="lastname"> <b>Last Name</b></label>
                    <input class="form-control" type="text"value="{{$user->lastname}}"  name="lastname" required><br><br>

                    <label for="email"><b>Email</b></label>
                    <input class="form-control" type="eamil" value="{{$user->email}}" name="email" required><br><br>

                    <label for="phonenumber"><b>Phone Number</b></label>
                    <input  class="form-control" type="text" value="{{$user->phonenumber}}"  name="phonenumber" minlength="10" maxlength="10" required><br><br>

                    <label for="password"> <b>Password</b></label> 
                    <input class="form-control" type="password" value="{{$user->password}}"  name="password" required><br><br>

       <hr class="mb-3">
                    <input type="submit" class ="submit" name="create" value="Update">  
</div> 
</form>             
</body>
</html>
