<link rel="stylesheet" href="{{ asset('css/postCard.css') }}">

<div class="post-card">
    <a href="/posts/{{ $post->id }}">
        <img src="{{ asset('storage/' . $post->image_url) }}"
            onerror="this.src='{{ asset('storage/images/posts_image/default.png') }}';" alt="Post Image"
            class="post-card-image" />
        <div class="p-2">
            <small>By {{ $post->user->username }}</small>
            <hr>
            <h2>{{ $post->title }}</h2>
            <p>{{ Str::limit($post->content, 100) }}</p>
        </div>
    </a>
</div>