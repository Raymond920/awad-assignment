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

<body class="bg-slate-900">
    <x-header />
    @if(session('success'))
    <div id="success-alert"
        class="fixed top-24 left-1/2 transform -translate-x-1/2 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transition-opacity duration-500 ease-in-out z-50">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            {{ session('success') }}
        </div>
    </div>

    <script>
        // Make the alert disappear after 3 seconds
        setTimeout(function() {
            const alert = document.getElementById('success-alert');
            if (alert) {
                alert.classList.add('opacity-0');
                setTimeout(() => {
                    alert.remove();
                }, 500);
            }
        }, 3000);
    </script>
    @endif

    @if($errors->any())
    <div id="error-alert"
        class="fixed top-24 left-1/2 transform -translate-x-1/2 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg transition-opacity duration-500 ease-in-out z-50">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            {{ $errors->first() }}
        </div>
    </div>
    <script>
        // Make the alert disappear after 3 seconds
        setTimeout(function() {
            const alert = document.getElementById('error-alert');
            if (alert) {
                alert.classList.add('opacity-0');
                setTimeout(() => {
                    alert.remove();
                }, 500);
            }
        }, 3000);
    </script>
    @endif

    @yield('content')

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>