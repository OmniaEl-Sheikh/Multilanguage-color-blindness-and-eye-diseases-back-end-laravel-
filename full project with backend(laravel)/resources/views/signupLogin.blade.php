<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp</title>
	<link href="assets/img/logo.png" rel="icon">
    <link rel="stylesheet" href="assets/css/signupLogin.css">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div id="container" class="container">

		<!-- FORM SECTION -->
		<div class="row">
				<div class="col align-items-center flex-col sign-up">
					<div class="form-wrapper align-items-center">
						<div class="form sign-up">
							<form method="POST" action="/signup">
								@csrf 
								<!-- SIGN UP -->
								<!-- @if(session('error')) <p class="error">{{ session('error') }}</p> @endif -->
							<div class="input-group">
								<i class="bi bi-person-fill"></i>
								<input required type="text" name="fname" id="fname" placeholder="first name"
										value={{old('fname')}}>
								<!-- @error('name') <p class="error">{{ $message }}</p> @enderror -->
							</div>
							<div class="input-group">
								<i class="bi bi-person-fill"></i>
								<input required type="text" name="lname" id="lname" placeholder="last name"
								value={{old('lname')}}>
								<!-- @error('name') <p class="error">{{ $message }}</p> @enderror -->
							</div>
												
							<div class="input-group">
								<i class="bi bi-envelope-fill"></i>
								<input required type="email" name="email" id="email" placeholder="Email@"
								value={{old('email')}}>
								@if (session('message') == "This email already exists")
								<p style="color: red; font-size: 30px;">{{session('message')}}</p>
								@endif
								<!-- <input required type="email" name="email" id="email" placeholder="Email@" value="{{ old('email') }}"> -->
								<!-- @error('email') <p class="error">{{ $message }}</p> @enderror -->
							</div>
							<div class="input-group">
								<i class="bi bi-key-fill"></i>
								<input required type="password" name="password" placeholder="password" id="password">
								<!-- @error('password') <p class="error">{{ $message }}</p> @enderror -->
							</div>
							<div class="input-group">
								<i class="bi bi-key-fill"></i>
								<input required type="password" name="password_confirmation" placeholder="password_confirmation"
									id="password_confirmation">
									<br>
								@if (session('message') == "Passwords does not match")
								<p style="color: red; font-size: 30px;">{{session('message')}}</p>
								@endif
							</div>


								<input class=button type="submit" value="signup">

							<p>
								<span>
									Already have an account?
								</span>
								<b onclick="toggle()" class="pointer">
									Sign in here
								</b>
							</p>
							</form>
						</div>

					</div>
				</div>

			<!-- END SIGN UP -->
			<!-- SIGN IN -->

				<div class="col align-items-center flex-col sign-in">
					<div class="form-wrapper align-items-center">
						<div class="form sign-in">
							<form method="post" action="/login">
								@csrf
								<!-- @if(session('error')) <p class="error">{{ session('error') }}</p> @endif -->
							<div class="input-group">
								<i class="bi bi-person-fill"></i>
								<input required type="email" name="email" id="email" placeholder="Email@" >
								<!-- <input required type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"> -->
								<!-- @error('email') <p class="error">{{ $message }}</p> @enderror -->
							</div>
							<div class="input-group">
								<i class="bi bi-key-fill"></i>
								<input required type="password" name="password" placeholder="password" id="password">
								<!-- @error('password') <p class="error">{{ $message }}</p> @enderror -->
							</div>

							<p style="color: red; font-size: 30px;">{{session('message')}}</p>
							<input type="submit" value="Sign in" class=button>


							<p>
								<span>
									Don't have an account?
								</span>
								<b onclick="toggle()" class="pointer">
									Sign up here
								</b>
							</p>
						</form>
						</div>
					</div>
					<div class="form-wrapper">

					</div>
				</div>

			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome
					</h2>

				</div>
				<div class="img sign-in">

				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">

				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>

				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>

    <script src="assets/js/app.js"></script>
</body>
</html>
