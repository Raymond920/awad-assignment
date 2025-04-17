<link rel="stylesheet" href="{{ asset('css/post.css') }}">

<div class="post-container">
    <div class="post-bg"></div>
    <div class="post-image-container">
        <img src="{{ asset('images/posts_image/' . $post->image_url) }}"
            onerror="this.src='{{ asset('images/posts_image/default.png') }}';" alt="Post Image" class="post-image" />
    </div>
    <div class="content-comments-container">
        <div class="content-container">
            <div class="flex justify-between items-center mb-2">
                <h2>{{ $post->user->username }}</h2>
                @auth
                @if(Auth::id() == $post->user_id)
                <div class="flex gap-2">
                    <button onclick="togglePostEditForm()"
                        class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Edit
                        Post</button>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Delete
                            Post</button>
                    </form>
                </div>
                @endif
                @endauth
            </div>
            <h2>{{ $post->title }}</h2>
            <br>
            <p>{{ $post->content }}</p>

            <!-- Edit Post Form (Hidden by default) -->
            <div id="edit-post-form" class="mt-3 hidden">
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="content" rows="5"
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $post->content }}</textarea>
                    <div class="flex justify-end gap-2 mt-2">
                        <button type="button" onclick="togglePostEditForm()"
                            class="px-3 py-1 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">Cancel</button>
                        <button type="submit"
                            class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Update</button>
                    </div>
                </form>
            </div>

            <br>
            <hr>
            <br>
        </div>

        {{-- Comment Form --}}
        @auth
        <div class="mb-6">
            <h4 class="text-lg font-medium mb-2">Add a comment</h4>
            <form action="{{ route('posts.comments.store', $post->id) }}" method="POST">
                @csrf
                <textarea name="content" rows="3"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Write your comment here..."></textarea>
                <button type="submit"
                    class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                    Post Comment
                </button>
            </form>
        </div>
        @else
        <div class="mt-6 p-4 bg-gray-50 rounded-lg text-center">
            <p class="text-gray-600">Please <a href="{{ route('show.login') }}"
                    class="text-blue-500 hover:underline">log in</a> to add a comment</p>
        </div>
        @endauth

        {{-- Comments Section --}}
        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4">Comments</h3>
            @foreach ($post->comments->sortByDesc('created_at') as $comment)
            <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-medium text-blue-600">{{ $comment->user->username }}</h3>
                    <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                    </p>
                </div>
                <p class="text-gray-700 mb-3">{{ $comment->content }}</p>
                @auth
                @if(Auth::id() == $comment->user_id)
                <div class="flex gap-2 justify-end">
                    <button onclick="toggleCommentEditForm({{ $comment->id }})"
                        class="text-sm text-blue-500 hover:text-blue-700 transition">Edit</button>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm text-red-500 hover:text-red-700 transition">Delete</button>
                    </form>
                </div>

                <!-- Edit Comment Form (Hidden by default) -->
                <div id="edit-form-{{ $comment->id }}" class="mt-3 hidden">
                    <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <textarea name="content" rows="2"
                            class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $comment->content }}</textarea>
                        <div class="flex justify-end gap-2 mt-2">
                            <button type="button" onclick="toggleCommentEditForm({{ $comment->id }})"
                                class="px-3 py-1 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">Cancel</button>
                            <button type="submit"
                                class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Update</button>
                        </div>
                    </form>
                </div>
                @endif
                @endauth
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function toggleCommentEditForm(commentId) {
        const form = document.getElementById('edit-form-' + commentId);
        form.classList.toggle('hidden');
    }

    function togglePostEditForm() {
        const form = document.getElementById('edit-post-form');
        form.classList.toggle('hidden');
    }
</script>