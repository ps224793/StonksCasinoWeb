<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titel')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ URL::asset('css/header.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('css/nav.css') }}">
</head>
<body>
    @include('layouts.header')
    <div class="container">
        @include('layouts.nav')
        @yield('/content')
    </div>
    @include('layouts.footer')
</body>
</html>