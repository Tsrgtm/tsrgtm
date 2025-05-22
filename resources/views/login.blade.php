<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite(['resources/css/admin.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/24f74c1771.js" crossorigin="anonymous"></script>
</head>

<body class="min-h-screen flex bg-gray-900 relative">
    <div class="m-auto w-full max-w-xs">
        <form class="bg-gray-800 p-8 rounded-lg shadow-lg" method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="text-center text-4xl font-bold text-white mb-4">Login</h1>
            <div class="mb-4">
                <label for="password" class="block text-white text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="block w-full px-4 py-2 rounded-lg bg-gray-700 border-2 border-gray-600 text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>
