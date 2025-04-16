@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="text-xl font-semibold">{{ __('Posts') }}</span>
                    @auth
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">Create Post</a>
                    @endauth
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if($posts->count() > 0)
                    <div class="space-y-4">
                        @foreach($posts as $post)
                        <div class="bg-white p-4 rounded-lg shadow mb-4 hover:shadow-md transition-shadow duration-200">
                            <div class="flex items-center mb-2">
                                <img src="{{ asset('images/posts_image/' . $post->image_url) }}"
                                    onerror="this.src='{{ asset('images/posts_image/default.png') }}';" alt="Post Image"
                                    class="w-16 h-16 object-cover rounded-lg mr-4">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800">
                                        <a href="{{ route('posts.show', $post->id) }}"
                                            class="hover:text-blue-600 transition-colors duration-200">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                    <div class="text-sm text-gray-500">
                                        <span>Posted by: {{ $post->user->username }}</span>
                                        @if($post->created_at)
                                        <span class="mx-1">•</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-3">{{ Str::limit($post->content, 150) }}</p>

                            <div class="flex justify-between items-center mt-4">
                                <div class="flex space-x-3 text-gray-500 text-sm">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                        </svg>
                                        {{ $post->likes_count }}
                                    </span>
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                        {{ $post->comments_count }}
                                    </span>
                                </div>

                                <div>
                                    <a href="{{ route('posts.show', $post->id) }}"
                                        class="inline-flex items-center px-3 py-1 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 transition-colors duration-200">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </a>

                                    @auth
                                    @if(auth()->user()->id === $post->user_id)
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="inline-flex items-center px-3 py-1 bg-yellow-500 text-white text-sm font-medium rounded-md hover:bg-yellow-600 transition-colors duration-200 ml-2">
                                        Edit
                                    </a>
                                    @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="text-center py-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900">No posts found</h3>
                        <p class="mt-1 text-gray-500">Be the first to create a post in this community.</p>
                        @auth
                        <div class="mt-4">
                            <a href="{{ route('posts.create') }}"
                                class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600 transition-colors duration-200">
                                Create a Post
                            </a>
                        </div>
                        @else
                        <div class="mt-4">
                            <a href="{{ route('show.login') }}"
                                class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600 transition-colors duration-200">
                                Log in to Create a Post
                            </a>
                        </div>
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection