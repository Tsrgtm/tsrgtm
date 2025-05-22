<header class="bg-gray-800 border-b border-gray-700 px-4 py-4 flex items-center justify-between">
    <h2 class="text-xl font-semibold text-white">
        @yield('page-title', 'Dashboard')
    </h2>
    <div class="flex items-center space-x-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="text-white hover:text-gray-400" type="submit">
                Logout
            </button>
        </form>
    </div>
</header>
