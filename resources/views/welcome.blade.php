<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Capability Test</title>

		<link rel="stylesheet" href="/css/app.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
	<div class="jumbotron">
		<h1 class="text-center">Capability Test</h1>
	</div>
	<div class="container">
		<div class="row">
			@foreach ($locations as $location)
				<div class="col-sm-4 location" data-timezone="{{ $location->timezone }}" data-lat="{{ $location->lat }}" data-long="{{ $location->long }}">
					<div class="well">
						<h1>{{ $location->label }}</h1>
						<p class="time">{{ $location->time }}</p>
						<iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{ $location->lat }},{{ $location->long }}&hl=es;z=14&amp;output=embed"></iframe>
					</div>
				</div>
			@endforeach
		</div>
	</div>
		<script type="text/javascript" src="/js/app.js"></script>
	</body>
</html>
