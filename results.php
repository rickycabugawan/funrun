<?php
session_start();
if(!isset($_SESSION['results'])){
	die('Direct access not permitted.');
}

define('access_const',true);
require "partials/template.php";

function page_title() {
	echo "Results";
}

function page_css() {
	echo "assets/css/results.css";
}

function page_content() {
	?>
		<div class="main">
			<div class="container py-4 clearfix">
				<h1 class="">Congratulations!</h1>
				<hr>
				<p>You have successfully registered to the event.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="float-none float-sm-right">Date Registered: 
					<span class="text-secondary"><?=$_SESSION['timestamp']?></span>
				</div>
				<div class="float-left float-sm-none">Participant/s:</div>
				<?php require "partials/results-table.php" ?>
				<div class="d-flex justify-content-center">
					<a href="index.php"><button type="button" class="btn btn-lg btn-success rounded-0 text-uppercase m-3 font-weight-bold">back</button></a>
				</div>
			</div>
		</div>


	<?php 
}
?>

