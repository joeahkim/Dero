<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Derrique H&T</title>
	<link href="{{ asset('assets/img/favicon.jpg') }}" rel="icon">
	<link href="{{ asset('assets/img/favicon.jpg') }}" rel="apple-touch-icon">
	<link rel="stylesheet" href="{{ asset('css/admin-signup.css') }}">
</head>

<body>

	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" placeholder="Name" />
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<!-- Sign In Form -->
			<form method="POST" action="{{ route('login') }}">
				@csrf <!-- Include CSRF Token for security -->
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				@if ($errors->any())
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					<h5>{{ $error }}</h5>
					@endforeach
				</div>
				@endif
				<!-- Email Input -->
				<input type="email" name="email" placeholder="Email" required autofocus />

				<!-- Password Input -->
				<input type="password" name="password" placeholder="Password" required />

				<a href="#">Forgot your password?</a>

				<!-- Submit Button -->
				<button type="submit">Sign In</button>
			</form>

		</div>
		<!-- <div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div> -->
	</div>

	<footer>
	</footer>
	<script src="{{ asset('js/admin-signup.js') }}"></script>
</body>

</html>