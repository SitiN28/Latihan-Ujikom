<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Selamat datang, {{ Auth::user()->name }} 
    <br>

    <a href="logout">Keluar</a><br>
    <a href="logout">home</a><br>

    @if(Auth::user()->level == 'admin')
    <a href="logout">User</a>

    @endif
</body>
</html>