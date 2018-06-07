<?php 
	define('access_const',true);
	require "partials/template.php";

	function page_title() {
		echo "Dashboard";
	}

	function page_css() {
		echo "assets/css/dashboard.css";
	}

	function page_content() {
		?>
			<div class="main">
				<div class="container-fluid py-4 clearfix">
					<h1 class="">List of Participants</h1>
					<hr>
					<div class="main-box table-responsive">
						<div class="sidebar">
							<?php require "partials/dashboard-sidebar.php" ?>
						</div>
						<div class="dashboard-table">
							<?php require "partials/dashboard-table.php" ?>
						</div>
					</div>
				</div>
			</div>


		<?php 
	}
 ?>

