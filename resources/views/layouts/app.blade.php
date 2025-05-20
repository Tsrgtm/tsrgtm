<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tusar Gautam - Web Developer Portfolio')</title>
    @yield('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/24f74c1771.js" crossorigin="anonymous"></script>

    @livewireStyles
</head>

<body>

    @yield('content')

    @livewireScripts
</body>

</html>
