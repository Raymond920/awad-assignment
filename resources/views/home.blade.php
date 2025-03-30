<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/container.css') }}">
    <title>Home</title>
</head>
<body>
    <x-header />
    <div class="container">
        <div class="content">
            <div style="overflow: auto;">
                <x-side-navbar />
            </div>
            <div class="main-content">
                <h1>Welcome to the Home Page</h1>
                <p>This is the main content area.</p>
            </div>
            <div class="right-content">
                <h1>Right content:</h1>
                <p>This is the right content area.</p>
                <x-footer />
            </div>
        </div>
    </div>
</body>
</html>