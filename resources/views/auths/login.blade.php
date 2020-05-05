<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Manatek</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{asset('/admin/assets/img/manatek2.png')}}"/>

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/vendor/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/vendor/animate/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/vendor/css-hamburgers/hamburgers.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/vendor/animsition/css/animsition.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/vendor/select2/select2.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/vendor/daterangepicker/daterangepicker.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('hehe/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('hehe/css/main.css')}}">
</head>

<body style="background-image: linear-gradient(#4169E1, #00BFFF);">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90" style="background-color: transparent; color: white;">
				<form class="login100-form validate-form flex-sb flex-w" action="/postlogin" method="POST" >
					{{csrf_field()}}
					<span class="login100-form-title p-b-51" style="color: white; text-align: center;">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="name" placeholder="Username" style="text-align: center;">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required" ">
						<input class="input100" type="password" name="password" placeholder="Password" style="text-align: center;">
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn m-t-17" >
						<button class="login100-form-btn"">
							LOGIN
						</button>
					</div>

				</form>
				<img src="{{asset('/admin/assets/img/manatek.png')}}" border="100" style=" position: relative; width: 100%; text-align: center; position: absolute; bottom: -95px;">
			</div>
		</div>
	</div>
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('hehe/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('hehe/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('hehe/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('hehe/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('hehe/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('hehe/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('hehe/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('hehe/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('hehe/js/main.js')}}"></script>

</body>
</html>