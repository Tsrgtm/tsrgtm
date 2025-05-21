<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tusar Gautam - Web Developer Portfolio')</title>
    @yield('meta')

    @vite(['resources/css/admin.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/24f74c1771.js" crossorigin="anonymous"></script>

    @livewireStyles
</head>

<body class="min-h-screen flex bg-gray-900 relative">
    <!-- Sidebar -->
    @include('layouts.partials.sidebar')


    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto relative">
        @include('layouts.partials.admin-header')

        <section class="px-6 py-10 max-w-7xl mx-auto">
            @yield('content')
        </section>
    </main>

    @livewireScripts
</body>

</html>
