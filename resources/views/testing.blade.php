<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/test.css') }}">
	{{--
	<link rel="stylesheet" href="{{ asset('css/background.css') }}"> --}}
	<title>Home</title>
</head>

<body>
	<div class='background'>
		<x-header />
		<div class="grid-container">
			<div class="grid-column">
				<x-side-navbar />
			</div>
			<div class="grid-column post-column">
				<x-post-detail :post="$post"/>
			</div>
		</div>
	</div>
</body>

</html>