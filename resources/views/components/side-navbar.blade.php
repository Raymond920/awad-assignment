<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<div class="side-navbar expanded" id="navbar">
    <button id="close-btn" onclick="collapseSidebar()"
        class="close-btn text-gray-500 hover:text-gray-700 focus:outline-none">✖</button>
    <button id="expand-btn" onclick="expandSidebar()" style="display: none"
        class="expand-btn text-gray-500 hover:text-gray-700 focus:outline-none">☰</button>
    <a href="{{ route('about') }}"
        class="text-blue-600 hover:text-blue-800 transition duration-300 block py-2 px-4 hover:bg-blue-50 rounded">About</a>
    @can('create', App\Models\Post::class)
    <a href="{{ route('posts.create') }}"
        class="text-blue-600 hover:text-blue-800 transition duration-300 block py-2 px-4 hover:bg-blue-50 rounded">Create
        Post</a>
    @else
    <a href="{{ route('login') }}"
        class="text-blue-600 hover:text-blue-800 transition duration-300 py-2 px-4 hover:bg-blue-50 rounded flex items-center">
        <span class="mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v14a1 1 0 01-1 1H4a1 1 0 01-1-1V3zm9 1a1 1 0 10-2 0v5a1 1 0 002 0V4zm-2 7a1 1 0 112 0v1a1 1 0 11-2 0v-1z"
                    clip-rule="evenodd" />
            </svg>
        </span>
        Login to post
    </a>
    @endcan
</div>

<script>
    function collapseSidebar() {
        const sidebar = document.getElementById('navbar');
        const expandbtn = document.getElementById('expand-btn');
        const closebtn = document.getElementById('close-btn');
        sidebar.className = 'side-navbar';
        closebtn.style.display = 'none';
        expandbtn.style.display = 'block';
    }

    function expandSidebar() {
        const sidebar = document.getElementById('navbar');
        const expandbtn = document.getElementById('expand-btn');
        const closebtn = document.getElementById('close-btn');
        sidebar.className = 'side-navbar expanded';
        expandbtn.style.display = 'none';
        closebtn.style.display = 'block';
    }
</script>