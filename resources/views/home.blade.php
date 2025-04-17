@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class='background'>
    <x-header />
    <div class="grid-container">
        <div class="grid-column">
            <x-side-navbar />
        </div>
        <div class="grid-column posts-column">
            <div class="post-cards-container">
                @foreach(App\Models\Post::all() as $post)
                <x-post-card :post="$post" />
                @endforeach
            </div>
        </div>
        <div class="grid-column">
            <div class="right-content">
                <h1>Right content:</h1>
                <p>This is the right content area.</p>
                <x-footer />
            </div>
        </div>
    </div>
</div>
@endsection