<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('favicon.ico') }}">

    <title>FileMaster @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('material/dist/css/roboto.min.css') }}">
    <link rel="stylesheet" href="{{ url('material/dist/css/ripples.min.css') }}">
    <link rel="stylesheet" href="{{ url('theme.css') }}">
</head>

<body>
    @include('/partials/navbar')

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ url('jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('material/dist/js/material.min.js') }}"></script>
    <script src="{{ url('material/dist/js/ripples.min.js') }}"></script>
    <script>$.material.init();</script>
</body>
</html>
