<!DOCTYPE html> <!--  helps browsers to display web pages correctly -->
<html>
		<!-- PHP Workshop (Oct. 27,2021) -->
		<!-- Login Form -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Login Form</title>

		<!-- External CSS -->
  		<link rel="stylesheet" type="text/css" href="./style.css">

	</head>
<body>
	<div class="header">
		<h2>Login Form</h2>
	</div>
	<form method="post" action="registration.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="text" name="c_password">
		</div>
		<div>
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<br>
		<p>Not yet a member? <a href="registration.php">Sign Up</a></p>
	</form>	
</body>
</html>