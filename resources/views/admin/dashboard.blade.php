@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-900">
    <div class="flex flex-col md:flex-row h-full min-h-screen">
        <div class="w-full md:w-64 bg-slate-800 text-white p-6">
            <h2 class="text-xl font-semibold mb-6">Admin Dashboard</h2>
            <nav class="space-y-2">
                <a href="{{route('admin.users.index')}}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-slate-700">
                    Users
                </a>
                <a href="{{ route('home') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 text-slate-300 hover:bg-slate-700 mt-8">
                    Back to Site
                </a>
            </nav>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            <!-- Header with Welcome Message -->
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-white">Welcome, {{ Auth::user()->username }}!</h1>
                <p class="text-gray-400">Here's what's happening with your forum today.</p>

                @can('is-admin')
                <div class="mt-4">
                    <div class="bg-green-600 text-white px-6 py-3 rounded-lg shadow-md inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium">Admin Access Granted</span>
                    </div>
                </div>
                @endcan
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-500 bg-opacity-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-gray-500 text-sm font-medium">Total Users</h3>
                            <p class="text-2xl font-semibold text-gray-800">{{ \App\Models\User::count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-500 bg-opacity-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-gray-500 text-sm font-medium">Total Posts</h3>
                            <p class="text-2xl font-semibold text-gray-800">{{ \App\Models\Post::count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-500 bg-opacity-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-gray-500 text-sm font-medium">Comments</h3>
                            <p class="text-2xl font-semibold text-gray-800">{{ \App\Models\Comment::count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-lg shadow-md mb-6">
                <div class="border-b px-6 py-4">
                    <h2 class="font-semibold text-lg">Recent Activity</h2>
                </div>
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        User</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action</th>
                                    <th
                                        class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse(\App\Models\Post::with('user')->latest()->take(5)->get() as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $post->user->username }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Created a new post: "{{
                                        Str::limit($post->title, 30) }}"</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{
                                        \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-4 text-center text-gray-500">No recent post activity
                                        found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection