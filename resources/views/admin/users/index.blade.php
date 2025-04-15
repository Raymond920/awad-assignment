@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-900">
    <div class="flex flex-col md:flex-row h-full min-h-screen">
        <div class="w-full md:w-64 bg-slate-800 text-white p-6">
            <h2 class="text-xl font-semibold mb-6">Admin Dashboard</h2>
            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-slate-700">
                    Dashboard
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 bg-blue-500 hover:bg-blue-600">
                    Users
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-slate-700">
                    Posts
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-slate-700">
                    Comments
                </a>
                <a href="{{ route('home') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 text-slate-300 hover:bg-slate-700 mt-8">
                    Back to Site
                </a>
            </nav>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-white">User Management</h1>
                <p class="text-gray-400">Manage user accounts and permissions</p>
            </div>

            <!-- Users Table -->
            <div class="bg-white rounded-lg shadow-md">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User ID
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Username
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach(\App\Models\User::all() as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $user->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $user->username }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    @if($user->role === 'admin')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
                                        Admin
                                    </span>
                                    @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        User
                                    </span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection