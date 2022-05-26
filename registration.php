<!DOCTYPE html> <!--  helps browsers to display web pages correctly -->
<html>
		<!-- PHP Workshop (Oct. 27, 2021) -->
		<!-- Registration Form -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Registration Form</title>

		<!-- External CSS -->
  		<link rel="stylesheet" type="text/css" href="./style.css">

	</head>
<body>
	<div class="header">
		<h2>Register Form</h2>
	</div>
	<form method="post" action="registration.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="">
			<label>Gender</label>
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
		</div>
		<div class="input-group">
			<label>Mobile Phone</label>
			<input type="text" name="m_phone">
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
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<br>
		<p>Already a member? <a href="login.php">Sign In</a></p>
	</form>	
</body>
</html>