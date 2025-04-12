@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-slate-900 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-sm">
        <div class="text-center">
            <h2 class="mt-2 text-3xl font-light text-gray-800">Log In</h2>
            <p class="mt-2 text-sm text-gray-500">
                Welcome back
            </p>
        </div>

        <form action="{{ route('login') }}" method="post" class="mt-8 space-y-5">
            @csrf
            <div class="space-y-4">
                @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $errors->first() }}</span>
                </div>
                @endif

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <div>
                        <input id="username" name="username" type="text" required class="appearance-none relative block w-full px-4 py-3 bg-gray-50 border border-gray-200
                               placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none focus:ring-1
                               focus:ring-blue-500 focus:border-blue-500 transition duration-200 ease-in-out"
                            placeholder="Enter your username" value="{{ old('username') }}">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div>
                        <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-4 py-3 bg-gray-50 border border-gray-200
                               placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none focus:ring-1
                               focus:ring-blue-500 focus:border-blue-500 transition duration-200 ease-in-out"
                            placeholder="Enter your password">
                    </div>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>
                    <div>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                            Forgot password?
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent 
                        text-sm font-medium rounded-lg text-white bg-blue-500 
                        hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2
                        focus:ring-blue-500 transition-all duration-200 ease-in-out shadow-md">
                    Log in
                </button>
            </div>

            <div class="text-sm text-gray-600 text-center mt-6">
                Don't have an account?
                <a href="{{ route('show.register') }}"
                    class="font-medium text-blue-600 hover:text-blue-500 transition duration-150">
                    Sign up
                </a>
            </div>
        </form>
    </div>
</div>
@endsection