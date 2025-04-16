<link rel="stylesheet" href="{{ asset('css/postCard.css') }}">

<div class="post-card">
    <a href="/posts/{{ $post->id }}">
        <img src="{{ asset('images/posts_image/' . $post->image_url) }}"
            onerror="this.src='{{ asset('images/posts_image/default.png') }}';" alt="Post Image"
            class="post-card-image" />
        <small>By {{ $post->user->username }}</small>
        <hr>
        <h2>{{ $post->title }}</h2>
        <p>{{ Str::limit($post->content, 100) }}</p>
    </a>
</div>