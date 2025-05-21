<!DOCTYPE html>
<html lang="en">

<head class="scroll-smooth">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tusar Gautam - Web Developer Portfolio')</title>
    @yield('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/24f74c1771.js" crossorigin="anonymous"></script>

    @livewireStyles
</head>

<body>
    <div class="relative mx-auto max-w-2xl px-4 sm:px-6 lg:px-8 py-12">
        @include('layouts.partials.header')
        @yield('content')
    </div>

    @livewireScripts
</body>

</html>
