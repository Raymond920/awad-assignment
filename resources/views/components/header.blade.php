<header class="py-6">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    <a href="{{ route('home') }}" class="home-button">
        <div class="website-name-container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <span>Inter-Knot</span>
        </div>
    </a>

    @guest
    <a href="{{ route('show.login') }}">
        <button class="bg-blue-600 rounded-full text-sm px-3 py-1 hover:bg-blue-700 font-bold whitespace-nowrap">Log
            In</button>
    </a>
    @endguest

    @auth
    @can('is-admin')
    <a href="{{ route('admin.dashboard') }}">
        <button class="bg-green-600 rounded-full text-sm px-3 py-1 hover:bg-green-700 font-bold whitespace-nowrap mr-2">Admin
            Dashboard</button>
    </a>
    @endcan

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit"
            class="bg-red-600 rounded-full text-sm px-3 py-1 hover:bg-red-700 font-bold whitespace-nowrap">
            Log Out
        </button>
    </form>
    @endauth
</header>