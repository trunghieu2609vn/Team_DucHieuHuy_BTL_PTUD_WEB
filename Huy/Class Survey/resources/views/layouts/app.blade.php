<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweet-alert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/background.css') }}">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-4 fixed-top">
		@yield('guard')
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<form class="form-inline mr-auto mt-2 mt-md-0">
				<input class="form-control mr-sm-2 " type="text" placeholder="Tìm kiếm khóa học" aria-label="Search">
				<button class="btn btn-success-outline bg-primary text-btn-search" type="submit">Tìm kiếm</button>
			</form>
			
			<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @yield("Authentication_Links")
            </ul>
		</div>
	</nav>
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>
