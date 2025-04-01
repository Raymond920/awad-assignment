<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<header>
    <!-- Left: Logo & Name -->
    <div>
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <span>Website Name</span>
    </div>

    <!-- Center: Search Bar -->
    <div>
        <input type="text" placeholder="Search...">
    </div>

    <!-- Right: Login & more... (log out stuff) -->
    <a href="{{ route('show.login') }}">
        <button>Log In</button>
    </a>
</header>