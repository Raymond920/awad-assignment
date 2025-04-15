<link rel="stylesheet" href="{{ asset('css/postCard.css') }}">

<div class="post-card">
    <a href="/post/{{ $post->id }}">
        <img src="{{ asset('images/posts_image/' . $post->img_file . '.png') }}"
        onerror="this.src='{{ asset('images/posts_image/default.png') }}';"
        alt="Post Image"
        class="post-card-image" />
        <small>By {{ $post->author_name }}</small>
        <hr>
        <h2>{{ $post->title }}</h2>
        <p>{{ Str::limit($post->content, 100) }}</p>
    </a>
</div>

