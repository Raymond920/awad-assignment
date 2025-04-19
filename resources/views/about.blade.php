@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/postPage.css') }}">

<div class='background mt-16'>
    <div class="grid-container">
        <div class="grid-column">
            <x-side-navbar />
        </div>
        <div class="grid-column posts-column">
            <div class="post-container">
                <div class="post-bg"></div>
                <div class="content-container bg-slate-800 p-8 rounded-lg shadow-lg text-white">
                    <h1 class="text-3xl font-bold mb-6 text-blue-400">About Inter-Knot</h1>

                    <div class="space-y-6">
                        <div>
                            <h2 class="text-2xl font-semibold mb-3 text-blue-300">Our Mission</h2>
                            <p class="text-gray-300">
                                Inter-Knot is the premier online platform for Proxies, Hollow Raiders, and investigators
                                to share information,
                                connect with peers, and find opportunities in the dangerous world of the Hollows. We
                                provide a secure and
                                anonymous space where professionals can exchange crucial intelligence while maintaining
                                operational security.
                            </p>
                        </div>

                        <div>
                            <h2 class="text-2xl font-semibold mb-3 text-blue-300">Community Guidelines</h2>
                            <ul class="list-disc pl-5 text-gray-300 space-y-2">
                                <li>Respect all members regardless of experience level</li>
                                <li>Do not reveal your true identity or the identity of others</li>
                                <li>Verify information before posting to maintain the integrity of our intelligence</li>
                                <li>Report suspicious activity to the site administrators</li>
                                <li>Keep discussions professional and constructive</li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="text-2xl font-semibold mb-3 text-blue-300">About The Hollows</h2>
                            <p class="text-gray-300">
                                The Hollows are dangerous dimensional anomalies that appeared after the fall of the old
                                capital.
                                These spaces contain valuable resources but are filled with Ethereals and other dangers.
                                Only those with sufficient Ether aptitude can safely enter and exit these areas.
                            </p>
                        </div>

                        <div>
                            <h2 class="text-2xl font-semibold mb-3 text-blue-300">Join Our Network</h2>
                            <p class="text-gray-300">
                                Whether you're a veteran Proxy with years of experience or just starting your career in
                                Hollow exploration,
                                Inter-Knot provides the resources and connections you need to succeed. Join our growing
                                network of professionals
                                and take your career to the next level.
                            </p>

                            @guest
                            <div class="mt-4">
                                <a href="{{ route('show.register') }}"
                                    class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition mr-4">Register</a>
                                <a href="{{ route('show.login') }}"
                                    class="inline-block px-6 py-3 bg-gray-700 text-white rounded-lg hover:bg-gray-800 transition">Login</a>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection