
<html>
<head>
<title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>

<link rel="stylesheet" href="<?=ASSETS?>css/login-register.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" id="form">
			<h1>Create An Account</h1>
			<input type="text" placeholder="First Name" name="firstName" id="firstName" />
            <input type="text" placeholder="Last Name" name="lastName" id="lastName"/>
			<input type="email" placeholder="Email" name="email" id="email"/>
			<input type="password" placeholder="Password" name="password" id="password"/>
			<input type="password" placeholder="Confirm Password" id="confirmPassword"name="confirmPassword" />
			<br>
			<!-- <div style="margin-top: 7px;" ></div> -->

			<button type="submit" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">

		<form method="post" id="loginform">

			<h1>Sign In</h1>
			<input type="email" placeholder="Email" name="email" id="email" required/>
			<input type="password" placeholder="Password" name="password" id="password" required/><br>
			<button type="submit" name="login">Sign In</button>
			<br>
			<p>Forgot Your Password? <a href="">Reset Now.</a></p>
		
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
            <img class="logo" src="<?=ASSETS?>Images/logo/eyecare-logo-white.png">

				<h1>Welcome Back!</h1>
				<p>Sign In To Get Your New Pair Of Glasses!</p>
				<button class="ghost" id="signIn">Sign In</button>
				<br>
				<a class="website" href="<?=ROOT?>index">Go Back To Website</a>

				
			</div>
			<div class="overlay-panel overlay-right">
            <img class="logo" src="<?=ASSETS?>Images/logo/eyecare-logo-white.png">
				
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start your journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
				<br>
				<a class="website" href="<?=ROOT?>index">Go Back To Website</a>

			</div>
		</div>
	</div>
</div>

<script src="<?=ASSETS?>js/LoginRegister.js"></script>
<script>

$(document).ready(function () {

    $('#form').validate({
      rules: {
        firstName: {
          required: true
        },
		lastName: {
			required: true
		},
        email: {
          required: true,
          email: true
        },
       
        password: {
          required: true,
          minlength: 6
        },
        confirmPassword: {
          required: true,
          equalTo: "#password"
        }
      },
      messages: {
        firstName: 'Please enter your first name.',
		lastName: 'Please enter your last name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
       
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 6 characters long.',
        },
        confirmPassword: {
          required: 'Please enter Confirm Password.',
          equalTo: 'Passwords do not match.',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });

  });
</script>

</body>
</html>