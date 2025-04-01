<header>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Left: Logo & Name -->
    <div class="website-name-container">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <span>Inter-Knot</span>
    </div>

    <!-- Center: Search Bar -->
    <input type="text" placeholder="Search..." class="h-8 px-3 border rounded-full">

    <!-- Right: Login & more... (log out stuff) -->
    @guest
    <a href="{{ route('show.login') }}">
        <button class="bg-blue-600 rounded-full text-sm px-3 py-1 hover:bg-blue-700 font-bold">Log In</button>
    </a>
    @endguest

    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-red-600 rounded-full text-sm px-3 py-1 hover:bg-red-700 font-bold">
            Log Out
        </button>
    </form>
    @endauth
</header>