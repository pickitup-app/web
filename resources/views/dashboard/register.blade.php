<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register/create" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" id="">
        <label for="">Email</label>
        <input type="text" name="email" id="">
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <label for="">Phone Number</label>
        <input type="text" name="phone_number" id="">
        <label for="">Role</label>
        <input type="text" name="role" id="role" value="admin" readonly>
        <button type="submit">Submit</button>
    </form>
</body>
</html>