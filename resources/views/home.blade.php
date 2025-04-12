<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home</title>
</head>
<body>
    <x-header />

    <div class="grid-container">
        <div class="grid-column">
            <x-side-navbar />
        </div>
        <div class="grid-column">
            <div class="post-cards-container">
                {{-- retrieve and display each post from posts table --}}
                @foreach($posts as $post)
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
</body>
</html>