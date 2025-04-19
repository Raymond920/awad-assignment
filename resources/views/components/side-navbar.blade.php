<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<div class="side-navbar expanded" id="navbar">
    <button class="close-btn" id="close-btn" onclick="collapseSidebar()">✖</button>
    <button class="expand-btn" id="expand-btn" onclick="expandSidebar()" style="display: none">☰</button>
    <a href="#">About</a>
    @can('create', App\Models\Post::class)
    <a href="{{ route('posts.create') }}">Create Post</a>
    @else

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