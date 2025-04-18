@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/postPage.css') }}">
<div class='background'>
	<div class="grid-container">
		<div class="grid-column">
			<x-side-navbar />
		</div>
		<div class="grid-column post-column">
			<x-post-detail :post="$post" />
		</div>
	</div>
</div>
@endsection