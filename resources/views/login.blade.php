<!DOCTYPE html>
<html lang="en">
<head>
	<title>Option Plus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('login/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			@if(session()->has('login_error'))
                <div style="height: 50px; width: 100%; color: #FFF; background-color: rgba(255,0,0,.6); line-height:50px; text-align: center">
                        {{ session()->get('login_error') }}
                </div>
			@endif


				<form action="{{ url('loginCheck') }}" method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
				{{ csrf_field() }}
					<span class="login100-form-title">
						OPTION PLUS
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="passwords" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{ url('login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('login/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ url('login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('login/js/main.js') }}"></script>

</body>
</html>