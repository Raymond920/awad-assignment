@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/postPage.css') }}">

<div class='background mt-16'>
    <div class="grid-container">
        <div class="grid-column">
            <x-side-navbar />
        </div>
        <div class="grid-column posts-column">
            <div class="post-container">
                <div class="post-bg"></div>
                <div class="content-container bg-slate-800 p-8 rounded-lg shadow-lg">
                    <h1 class="text-2xl font-bold mb-6 text-white">Create New Post</h1>

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Image -->
                        <div class="mb-6">
                            <label for="image_file" class="block text-gray-300 mb-2">Image:</label>
                            <input type="file" name="image_file"
                                class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Title -->
                        <div class="mb-6">
                            <label for="title" class="block text-gray-300 mb-2">Title:</label>
                            <input type="text" name="title" required
                                class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Content -->
                        <div class="mb-6">
                            <label for="content" class="block text-gray-300 mb-2">Content:</label>
                            <textarea name="content" rows="8" required
                                class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                                Create Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection