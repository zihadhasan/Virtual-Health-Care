<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="INFiNITE">
	<title>Doctor & Patient</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

	<!-- BASE CSS -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	{{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
	<link href="{{asset('css/style-front.css')}}" rel="stylesheet">
	<link href="{{asset('css/menu.css')}}" rel="stylesheet">
	<link href="{{asset('css/vendors.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
  	<link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>

<body>

	<nav style="padding-bottom: 5px;" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Doctor & Patient</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      	<div class="col-lg-6 col-lg-offset-3">
			<form class="navbar-form navbar-left" method="get" action="/doctors/search">
				<div class="form-group">
					<input type="text" name="query" class="form-control" placeholder="Search" size="80">
				</div>
				<button style="color:white; border-radius: 0px;" type="submit" class="btn btn-primary btn-lg">Submit</button>
			</form>
      	</div>

      <ul class="nav navbar-nav navbar-right">
		@if(!Auth::user())
		<li>
			<a class="btn btn-success" href="/login"><i class="fa fa-power-off"></i> Login</a>
		</li>
		<li>
			<a class="btn btn-primary" href="/register"><i class="fa fa-user-plus"></i> Register</a>
		</li>
		@else
		<li>
			<a class="btn btn-info" href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
		</li>
		<li>
			<a class="btn btn-danger" href="{{ url('/logout') }}"
			onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
			<i class="fa fa-power-off"></i> Logout
			</a>

			<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
			</form>
		</li>
		@endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <main>
		<div style="height: 85vh;" class="bg_color_2 ">
			<div class="container margin_60_35">
				<div id="login">
					<h1>Please login for Service</h1>
					<div class="box_form">
						<form method="POST" action="{{ url('/login') }}">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Your email address">
								@if ($errors->has('email'))
						            <span class="help-block">
						                <strong>{{ $errors->first('email') }}</strong>
						            </span>
						        @endif
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Your password">
								@if ($errors->has('password'))
						            <span class="help-block">
						                <strong>{{ $errors->first('password') }}</strong>
						            </span>
						        @endif
							</div>
							<a href="#0"><small>Forgot password?</small></a>
							<div class="form-group text-center add_top_20">
								<button class="btn_1 medium" type="submit"><strong>Login</strong></button>
							</div>
						</form>
					</div>
					<p class="text-center link_bright">Do not have an account yet? <a href="/register"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
	</main>
	<footer>
		<div class="container">
			<div class="row">
				<div style="color: #212121 !important;" class="col-lg-6 col-lg-offset-3">
					Made by Team <strong>INFiNITE</strong> for <strong>UAP S&H Expo.</strong> <span style="color:red; font-size: 3rem;">&hearts;</span>
				</div>
			</div>
		</div>
	</footer>

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('js/common_scripts.min.js')}}"></script>
	<script src="{{asset('js/functions.js')}}"></script>

</body>

</html>
