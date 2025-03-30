@extends('layouts.app')

@section('content')
<div
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-950 via-blue-950/80 to-purple-950/90 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full backdrop-blur-xl bg-gray-800/40 p-8 rounded-3xl shadow-2xl border border-gray-700/30">
        <div class="text-center">
            <h2 class="mt-2 text-3xl font-medium text-white">Sign Up</h2>
            <p class="mt-2 text-sm text-gray-400">
                Start your journey with us today
            </p>
        </div>

        <form action="/" method="post" class="mt-10 space-y-6">
            @csrf
            <div class="space-y-5">
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-300 mb-1 ml-1">Username</label>
                    <div>
                        <input id="username" name="username" type="text" required
                            class="appearance-none relative block w-full px-4 py-3 bg-gray-700/50 border border-gray-600 
                               placeholder-gray-400 text-white rounded-xl focus:outline-none focus:ring-1
                               focus:ring-blue-400 focus:border-blue-400 backdrop-blur-sm transition duration-200 ease-in-out" placeholder="Enter your username">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1 ml-1">Email address</label>
                    <div>
                        <input id="email" name="email" type="email" required
                            class="appearance-none relative block w-full px-4 py-3 bg-gray-700/50 border border-gray-600 
                               placeholder-gray-400 text-white rounded-xl focus:outline-none focus:ring-1
                               focus:ring-blue-400 focus:border-blue-400 backdrop-blur-sm transition duration-200 ease-in-out" placeholder="Enter your email">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1 ml-1">Password</label>
                    <div>
                        <input id="password" name="password" type="password" required
                            class="appearance-none relative block w-full px-4 py-3 bg-gray-700/50 border border-gray-600 
                               placeholder-gray-400 text-white rounded-xl focus:outline-none focus:ring-1
                               focus:ring-blue-400 focus:border-blue-400 backdrop-blur-sm transition duration-200 ease-in-out" placeholder="Create a password">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-1 ml-1">Confirm
                        password</label>
                    <div>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="appearance-none relative block w-full px-4 py-3 bg-gray-700/50 border border-gray-600 
                               placeholder-gray-400 text-white rounded-xl focus:outline-none focus:ring-1
                               focus:ring-blue-400 focus:border-blue-400 backdrop-blur-sm transition duration-200 ease-in-out" placeholder="Confirm your password">
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent 
                        text-sm font-medium rounded-xl text-white bg-blue-500/90 backdrop-blur-sm
                        hover:bg-blue-600/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900
                        focus:ring-blue-500 transition-all duration-200 ease-in-out shadow-lg">
                    Create Account
                </button>
            </div>

            <div class="text-sm text-white text-center mt-6">
                Already have an account?
                <a href="/login" class="font-medium text-blue-400 hover:text-blue-300 transition duration-150">
                    Sign in
                </a>
            </div>
        </form>
    </div>
</div>
@endsection