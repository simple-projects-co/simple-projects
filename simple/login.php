<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>

	<body>
	  <div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<form action="controllers/verify.php" method="POST">
						<?php if(isset($_GET['err'])){ echo '<font color="#ff6232"><h3>Incorrect Username or Password</h3></font>';} ?>
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="username">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="password">
						</div>
						<br><br>
						<div class="group">
							<input type="submit" class="button" value="Sign In">
						</div>
					</form>
					<div class="hr"></div>
					<div class="foot-lnk">
						Forgot Password? Contact Local Admin.
					</div>
				</div>
				<div class="sign-up-htm">
					<font color="#ffcd38"><h3>Under Construction</h3></font>
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" readonly>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" readonly>
					</div>
					<div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input id="pass" type="password" class="input" data-type="password" readonly>
					</div>
					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input id="pass" type="text" class="input" readonly>
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	  
	</body>
</html>
