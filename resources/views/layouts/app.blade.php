<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        /* Minimalist scrollbar styles */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(100, 100, 100, 0.5);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(100, 100, 100, 0.8);
        }

        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.5) rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="antialiased bg-slate-900">
    <x-header />
    @yield('content')
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>