@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/postPage.css') }}">
<div class='background'>
	<x-header />
	<div class="grid-container">
		<div class="grid-column">
			<x-side-navbar />
		</div>
		<div class="grid-column post-column">
			<x-post-detail :post="$post" />

			@auth
			<div class="post-actions mt-4 flex gap-2">
				@can('update', $post)
				<a href="{{ route('posts.edit', $post->id) }}"
					class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
					Edit Post
				</a>
				@endcan

				@can('delete', $post)
				<form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
					@csrf
					@method('DELETE')
					<button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded"
						onclick="return confirm('Are you sure you want to delete this post?')">
						Delete Post
					</button>
				</form>
				@endcan
			</div>
			@endauth
		</div>
	</div>
</div>
@endsection