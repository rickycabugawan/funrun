<?php
if(!defined('access_const')) {
   die('Direct access not permitted.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php page_title(); ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="<?php page_css(); ?>">

</head>
<body>

	<!-- Start Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light sticky-top py-0" style="background-color:#fff;">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img class="logo img-fluid" src="assets/images/logo.png"  alt="company logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item text-uppercase">
				    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item text-uppercase">
				    <a class="nav-link" href="#">Run Information</a>
				  </li>
				  <li class="nav-item text-uppercase">
				    <a class="nav-link" href="index.php#register">Registration</a>
				  </li>
				  <li class="nav-item text-uppercase">
				    <a class="nav-link" href="#">Contact Us</a>
				  </li>
				  <li class="nav-item text-uppercase">
				    <a class="nav-link" href="dashboard.php">Dashboard</a>
				  </li>
				</ul>
			</div>
		</div>
	</nav>

	<?php page_content(); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/js/scroll.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>