<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Details</title>
    <link rel="stylesheet"  type="text/css" href="{{ ('assets/css/adduser.css') }}">
    </head>
<body>

    <div class="form-container">
        <h2>Add User Details</h2>
        <form action="#" method="post">
            @csrf
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>