<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="{{ ('assets/css/adminhomedesign.css') }}">
</head>
<body>
    <div class="button-container">
        <form action="{{url('viewuser')}}">
        <button class="icon-button1">
            
            <span class="text">No of users</span>
        </button>
</form>
<form action="{{url('viewcompany')}}" >
        <button class="icon-button2">
        
            <span class="text">No of companys</span>
        </button>
</form>
        <form action="{{url('addcompany')}}">
        <button class="icon-button3" >
       
            <span class="text">Add Company</span>
        </button>
</form>
    </div>
</body>
</html>