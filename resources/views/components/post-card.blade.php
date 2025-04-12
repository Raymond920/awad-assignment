<div class="post-card">
    <img src="{{ asset('images/posts_image/' . $post->img_file . '.png') }}"
     onerror="this.src='{{ asset('images/posts_image/default.png') }}';"
     alt="Post Image"
     class="w-32 h-auto" />
    <h2>{{ $post->title }}</h2>
    <p>{{ Str::limit($post->content, 100) }}</p>
    <small>By {{ $post->author_name }}</small>
</div>
