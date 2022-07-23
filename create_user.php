<?php include('functions.php') 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration system PHP and MySQL - Create user</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			.header {
				background: #009432;
			}
			button[name=register_btn] {
				background: #009432;
			}
		</style>
	</head>
	<body>
		<div class="header">
			<h2>Admin - create user</h2>
		</div>
			
		<form method="post" action="create_user.php">
			
			<?php echo display_error(); ?>
			
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
			
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="register_btn"> + Create user</button>
			</div>
		</form>
	</body>
</html>