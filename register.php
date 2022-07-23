<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>

<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter user name" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="enter@email.com" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>User Type</label>
		
		<select name="user_type" id="user_type">
			<option name="selected">Select anyone ----</option>
			<option>User</option>
			<option>Admin</option>
			<select>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" placeholder="password" value="<?php echo $password; ?>">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" placeholder="Confirm password">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>