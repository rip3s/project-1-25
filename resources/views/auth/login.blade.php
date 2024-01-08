<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('authentication/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container" style="background-color: #FFFFFF;">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center mb-10">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-10">
					<div class="login-wrap p-4 p-md-10">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
				  <form method="POST" action="{{ route('login') }}">
			        @csrf
					<div class="form-group">
		      			<input name="username" type="text" class="form-control rounded-left" placeholder="username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input name="password" type="password" class="form-control rounded-left" placeholder="password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="col-md-3 text-center mb-3">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" id = "remember_token" name = "remember">
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="col-md-6 text-center mb-3">
									<a href="{{ route('register') }}">sign up</a>
								</div>
								<div class="w-50 text-md-right">
									<a href="{{ route('password.request') }}">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
	            </div>

	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('authentication/js/jquery.min.js')}}"></script>
  <script src="{{asset('authentication/js/popper.js')}}"></script>
  <script src="{{asset('authentication/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('authentication/js/main.js')}}"></script>

	</body>
</html>

