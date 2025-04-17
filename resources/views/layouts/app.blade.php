<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="antialiased bg-slate-900">
    <x-header />
    @yield('content')
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>