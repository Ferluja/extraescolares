<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <title>@yield('titulo')</title>
</head>
<body>
    @yield('contenido')
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/scaffold.js')}}"></script>
    <script src="{{asset('bootstrap/js/hoursRegister.js')}}"></script>
    <script src="{{asset('bootstrap/js/signup.js')}}"></script>
</body>
</html>