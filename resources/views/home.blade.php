@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class='background mt-16'>
    <div class="grid-container">
        <div class="grid-column">
            <x-side-navbar />
        </div>
        <div class="grid-column posts-column">
            <div class="post-cards-container">
                @foreach(App\Models\Post::orderBy('created_at', 'asc')->get() as $post)
                <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection