<?php
	require "../includes/common.php";
	if(!isset($_SESSION['email'])) {
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Success | E-Store</title>
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
		<center>
			<h4 class="cols">
				<?php
					$itemsid = $_GET["itemsid"];
					$user_id = $_SESSION["user_id"];
					$itemsid = array_map("intval", explode(",", $itemsid));
					$itemsid = implode("','", $itemsid);
					$upd_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND item_id IN ('$itemsid')";
					mysqli_query($con, $upd_query) or die(mysqli_error($con));
				?>
				Thank you for ordering from E-Store. The order shall be delivered to you shortly.
				<hr>
				Order some more electronic items <a href="home.php">here</a>.
			</h4>
		</center>
	</div>
	<?php 
		include "../includes/Footer.php";
	?>
</body>
</html>