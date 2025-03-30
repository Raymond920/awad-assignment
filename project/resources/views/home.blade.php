<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/container.css') }}">
    <title>Home</title>
</head>
<body>
    <div class="container">

        <div class="header">
            <x-header />
        </div>
        <div class="content">
        <x-side-navbar />
            <h1>Welcome to the Home Page</h1>
            <p>This is the main content area.</p>
        </div>
        <div class="footer">
            <x-footer />
        </div>

</body>
</html>