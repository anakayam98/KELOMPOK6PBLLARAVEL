<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Sipris</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
		rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
		rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
		<div class="container px-5">
			<a class="navbar-brand fw-bold" href="/"><img src="{{asset('images/logo.png')}}" width="80px"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="bi-list"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
					@guest
					<li class="nav-item">
						<a href="/register" class="btn btn-info rounded-pill px-3 mb-2 mb-lg-0 mr-lg-4">
							<span class="d-flex align-items-center">
								<i class="bi-chat-text-fill me-2"></i>
								<span class="small">Register</span>
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="/login" class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
							<span class="d-flex align-items-center">
								<i class="bi-chat-text-fill me-2"></i>
								<span class="small">Login</span>
							</span>
						</a>
					</li>
					@else
					<li class="nav-item">
						<a class="nav-link" href="{{url('home')}}">Rekap Presensi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('user')}}">Daftar User</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
																					 document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</li>
					@endguest
				</ul>

			</div>
		</div>
	</nav>
	<header class="masthead">
		@yield('content')
	</header>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
		crossorigin="anonymous"></script>
</body>

</html>
