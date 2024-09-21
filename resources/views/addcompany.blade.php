<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Company Details</title>
    <link rel="stylesheet"  type="text/css" href="{{ ('assets/css/addfaculty.css') }}">
    </head>
<body>

    <div class="form-container">
        <h2>Add Company Details</h2>
        <form action="#" method="post">
            <label for="companyname">Company Name:</label>
            <input type="text" id="companyname" name="companyname" required>

            <label for="companyaddress">Company Address:</label>
            <input type="text" id="companyaddress" name="companyaddress" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>