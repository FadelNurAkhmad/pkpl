<?php

require 'Classes\LoginController.php';
session_start();
if(isset($_POST['submit'])){
	$login = new LoginController;
	if(!empty($_POST['remember'])){
		$remember = $_POST['remember'];
	}else{
		$remember = NULL;
	}
	$login->getData($_POST['email'], $_POST['password'], $remember);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Here</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-secondary">
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 100px;">
			<div class="col-4">	
				<?php
					if(isset($_POST['submit'])){
						echo "<div class='alert alert-danger text-center' role='alert'>
							'".$login->message."'
							</div>";
					}
				?>
				<h1 class="text-center text-light mt-5 mb-4">Login Disini</h1>
				<form method="post" action="login.php">
					<div class="form-group">
						<input type="text" name="email" placeholder="Email" class="form-control" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email']; } ?>">
					</div>

					<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; } ?>">
					</div>

					<!-- <div class="form-check">
						<input type="checkbox" name="remember" class="form-check-input" id="remember1" <?php if(isset($_COOKIE['email'])){ ?> checked <?php } ?>>
						<label class="form-check-label" for="remember1">Remember Me</label>
					</div> -->

					<input type="submit" name="submit" value="Login" class="btn btn-outline-light mt-5 btn-block">
					<a href="register.php" class="btn btn-primary btn-block">Register</a>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>