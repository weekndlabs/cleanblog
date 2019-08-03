<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CleanBlog</title>
	<meta name="description" content="Clean Blog">
	<meta name="author" content="weekndlabs">
	<meta name="robots" content="index, follow">
	<link rel="icon" sizes="192x192" type="image/png" href="{{asset('media/logo.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('media/logo.png')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,600,700">
	<link rel="stylesheet" href="{{asset('css/blog.css')}}">
	<script>
		window.Laravel = {
		                "csrfToken": "NXqLq1bpGZIWv1fsE3rhFh24UbEQtR5c1i1DG7dq"
		            };
	</script>
</head>

<body>
	<!-- Page Container -->
	<div id="page-container" class="">
		<!-- Header -->
		<header id="page-header">
			<div class="container py-0">
				<div class="page-header-content">
					<div>
						<a class="site-logo" href="/">
							<img class="page-header-pdark-hidden" src="/media/logo.png" srcset="/media/logo@2x.png 2x" alt="cleanblog logo">
							<img class="page-header-dark-visible" src="/media/logo-transparent.png" srcset="/media/logo-transparent@2x.png 2x" alt="cleanblog logo">cleanblog</a>
					</div>
					<nav class="d-flex align-items-center flex-row-reverse flex-md-row">
						<div class="nav-main-container nav-main-container-horizontal">
							<button type="button" class="nav-main-item nav-main-toggle px-2 active"> <i class="fal fa-fw fa-bars"></i>
							</button>
							<div class="nav-main-group">
								<a class="nav-main-item active" href="#"> <i class="fal fa-fw mr-1 d-md-none"></i>
									Startups</a>
								<a class="nav-main-item" href="#"> <i class="fal fa-fw mr-1 d-md-none"></i>
									Tech</a>
                                    @if (Route::has('login')) @auth
								<a href="{{ url('/dashboard') }}">
									<button type="button" class="btn btn-light d-none d-md-inline-block">Dashboard</button>@else
									<a class="nav-main-item d-none d-md-inline-block" href="{{ route('login') }}"> <i class="fal fa-fw fa-sign-in mr-1"></i>
										Login</a>
                                        @endauth @endif
									<a class="nav-main-item nav-main-item-featured d-none d-md-inline-block" href="https://github.com/weekndlabs/cleanblog" target="_blank"> <i class="fal fa-fw fa-download mr-1"></i>
										Get Source Code</a>
							</div>
						</div>
						<div class="nav-main-container d-md-none">
                        @if (Route::has('login')) @auth
								<a href="{{ url('/dashboard') }}">
									<button type="button" class="btn btn-light">Dashboard</button>@else
									<a class="nav-main-item" href="{{ route('login') }}"> <i class="fal fa-fw fa-sign-in mr-1"></i>
										Login</a>
                                        @endauth @endif

						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- END Header -->