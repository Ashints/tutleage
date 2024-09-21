<!DOCTYPE html>
<html lang="en">
<head>
    <title>adminlogin</title>
    <link rel="stylesheet"  type="text/css" href="{{ ('assets/css/admin.css') }}">
</head>
<body>

    <section>

    @if(session('message'))

<div class="alert alert-success">{{session('error')}}</div>

@endif

        <div class="login-form">
            <div class="form-value">
                <form action="{{url('adminlogin')}}">
                    @csrf
                    <h2>login</h2>
                <BR>
                    <div class="input-field">
                    <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
</div>

                        <div class="input-field">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
</div>
<div>
<label for="">
<input type="checkbox">Remember Me   </label></t><a href="#">   Forget Password</a>
</div>
<br>
<div>
<input type="submit" class ="login-btn"  value="login">  
</div> 
</form>
</div>
</div>
</section>
</body>
</html>