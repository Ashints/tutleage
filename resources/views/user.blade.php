<!DOCTYPE html>
<html lang="en">
<head>
    <title>user</title>
    <link rel="stylesheet" href="{{ asset ('assets/css/index.css') }}">

</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="{{url('dash')}}">
                    @csrf
                    <h2>login</h2>
                    <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="">Email</label>
</div>

                        <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
</div>
<div class="forget">
<label for="">
<input type="checkbox">Remember Me   </label></t><a href="#">   Forget Password</a>
</div>
<button>Log in</button>
<div class="register">
    <p>Dont have a account?  <a href="{{url('register')}}">Register</p></a>
</div> 
</form>
</div>
</div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>