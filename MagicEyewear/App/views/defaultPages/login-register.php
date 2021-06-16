
<html>
<head>
<title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>

<link rel="stylesheet" href="<?=ASSETS?>css/login-register.css">
</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post">
			<h1>Create An Account</h1>
			<input type="text" placeholder="First Name" name="firstName" required/>
            <input type="text" placeholder="Last Name" name="lastName" required/>
			<input type="email" placeholder="Email" name="email"required/>
			<input type="password" placeholder="Password" name="password" required/><br>
			<button type="submit" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">

		<form method="post">

			<h1>Sign In</h1>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required/><br>
			<button type="submit" name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
            <!-- <img class="logo" src="/MagicEyewear/eyecare-logo-white.png"> -->

				<h1>Welcome Back!</h1>
				<p>Sign In To Get Your New Pair Of Glasses!</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
            <!-- <img class="logo" src="/MagicEyewear/eyecare-logo-white.png"> -->

				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start your journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="<?=ASSETS?>js/LoginRegister.js"></script>

</body>
</html>