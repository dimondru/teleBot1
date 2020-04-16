<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/lib/bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('/lib/bootstrap/js/bootstrap.bundle.css') }}"></script>
    <title>Document</title>
</head>

<body>
<div class="container-fluid">
    <h1>Здарова</h1>
</div>
<div class="container-fluid">
    @yield('content')

</div>

</body>
</html>
