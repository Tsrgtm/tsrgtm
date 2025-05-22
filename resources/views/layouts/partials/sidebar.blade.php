<aside class="w-64 bg-gray-800 h-screen relative border-r border-gray-700">
    <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500 p-6">
        TSR GTM
    </div>

    <nav class="mt-6 w-full space-y-2 p-6">
        <a href="{{ route('admin.index') }}"
            class="flex items-center w-full px-3 py-2 space-x-4 text-gray-300 rounded-md
            {{ request()->routeIs('admin.index') ? 'bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg' : 'hover:text-gray-200 hover:bg-gray-700 hover:shadow-md' }}
            transition-colors transition-shadow">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('admin.personal-info') }}"
            class="flex items-center w-full px-3 py-2 space-x-4 text-gray-300 rounded-md
            {{ request()->routeIs('admin.personal-info') ? 'bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg' : 'hover:text-gray-200 hover:bg-gray-700 hover:shadow-md' }}
            transition-colors transition-shadow">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
        <a href="{{ route('admin.experience') }}"
            class="flex items-center w-full px-3 py-2 space-x-4 text-gray-300 rounded-md
            {{ request()->routeIs('admin.experience') ? 'bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg' : 'hover:text-gray-200 hover:bg-gray-700 hover:shadow-md' }}
            transition-colors transition-shadow">
            <i class="fas fa-briefcase"></i>
            <span>Experience</span>
        </a>

        <a href="{{ route('admin.education') }}"
            class="flex items-center w-full px-3 py-2 space-x-4 text-gray-300 rounded-md
            {{ request()->routeIs('admin.education') ? 'bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg' : 'hover:text-gray-200 hover:bg-gray-700 hover:shadow-md' }}
            transition-colors transition-shadow">
            <i class="fas fa-graduation-cap"></i>
            <span>Education</span>
        </a>

        <a href="{{ route('admin.project') }}"
            class="flex items-center w-full px-3 py-2 space-x-4 text-gray-300 rounded-md
            {{ request()->routeIs('admin.project') ? 'bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg' : 'hover:text-gray-200 hover:bg-gray-700 hover:shadow-md' }}
            transition-colors transition-shadow">
            <i class="fas fa-project-diagram"></i>
            <span>Projects</span>
        </a>

        <a href="#"
            class="flex items-center w-full px-3 py-2 space-x-4 text-gray-300 hover:text-gray-200 hover:bg-gray-700 transition-colors rounded-md">
            <i class="fas fa-newspaper"></i>
            <span>Blogs</span>
        </a>

        <a href="{{ route('admin.contact') }}"
            class="flex items-center w-full px-3 py-2 space-x-4 text-gray-300 rounded-md
            {{ request()->routeIs('admin.contact') ? 'bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg' : 'hover:text-gray-200 hover:bg-gray-700 hover:shadow-md' }}
            transition-colors transition-shadow">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </nav>

    <form action="{{ route('logout') }}" method="POST"
        class="absolute bottom-2 px-6 w-full pt-4 border-t border-gray-700">
        @csrf
        <button type="submit"
            class="text-gray-300 hover:text-gray-200 transition-colors flex items-center gap-2 w-full hover:bg-gray-700 px-3 py-2 rounded-md">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </button>
    </form>

</aside>
