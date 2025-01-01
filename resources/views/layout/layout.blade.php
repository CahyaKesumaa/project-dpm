<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'DPM-PM STIKOM')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    @include('layout.partials.navbar')
    @include('layout.partials.hero')
    @include('layout.partials.dpm')
    @include('layout.partials.team')
    @include('layout.partials.news')
    @yield('script')
    @include('layout.partials.footer')
</body>

</html>
