<?php
	require "../includes/common.php";
	if(isset($_SESSION['email'])) {
		header('location: home.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | E-Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		include "../includes/header.php";
	?>
	<div class="container top">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<form method="post" action="login_script.php">
					<div class="form-group">
						<h1>LOG IN</h1>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="Email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="Password" placeholder="Password" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<?php 
		include "../includes/Footer.php";
	?>
</body>
</html>