<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema de Gestion Veteriaria - H2 Sistemas SpA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="lg/image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="lg/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lg/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="lg/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="lg/css/util.css">
	<link rel="stylesheet" type="text/css" href="lg/css/main.css">

</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}"  >
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					@csrf
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" value="{{ old('email') }}" required autofocus >
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" required autocomplete="current-password" >
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="ckb1">
								Recordar sessión      
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Olvidó su contraseña?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('lg/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	

	<script src="lg/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="lg/vendor/animsition/js/animsition.min.js"></script>
	<script src="lg/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="lg/js/main.js"></script>

</body>
</html>