<?php
require 'Classes\LogoutController.php';
require 'Classes\ShowController.php';

$mysqli = new ShowController();

// include 'Classes\Database\Connect.php';
// $db = new Connect();

if(isset($_POST['logout'])){
	$logout = new LogoutController;
	$logout->Logout();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<!-- header -->
	<header>
		<nav class="navbar navbar-light bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand text-light">PKPL 21</a>
				<form method="post" action="administrator.php">
					<input type="submit" name="logout" value="Logout" class="btn btn-danger btn-block">
				</form>
			</div>
		</nav>
	</header>
	<!-- conten -->
	<div class="section">
		<div class="container">
			<h3>Data User</h3>
			<div class="box">
				<table border="1" cellspacing="0" class="table">
					<thead>
					<tr>
						<th width="60px">ID</th>
						<th width="100px">Name</th>
						<th width="100px">Email</th>
						<th width="100px">Created</th>
					</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
								<?php foreach ($mysqli->tampilData() as $show) { ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $show['name'] ?></td>
										<td><?php echo $show['email'] ?></td>
										<td><?php echo $show['created_at'] ?></td>
								
									</tr>
								<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Fadel Nur Akhmad.</small>
		</div>
	</footer>
</body>
</html>