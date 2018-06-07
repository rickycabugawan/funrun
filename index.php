<?php
session_start();

unset($_SESSION['results']);

if(isset($_SESSION['valid']) && $_SESSION['valid']==false) {

	$error = 1;

	$firstname 	= $_SESSION['firstname']; 	unset($_SESSION['firstname']);
	$lastname 	= $_SESSION['lastname'];	unset($_SESSION['lastname']);
	$address 	= $_SESSION['address'];		unset($_SESSION['address']);
	$email 		= $_SESSION['email'];		unset($_SESSION['email']);
	$bday 		= $_SESSION['bday'];		unset($_SESSION['bday']);
	$contact 	= $_SESSION['contact'];		unset($_SESSION['contact']);
	$gender 	= $_SESSION['gender'];		unset($_SESSION['gender']);
	$shirt 		= $_SESSION['shirt'];		unset($_SESSION['shirt']);

	$firstname_err 	= $_SESSION['firstname_err']; 	unset($_SESSION['firstname_err']);
	$lastname_err 	= $_SESSION['lastname_err'];	unset($_SESSION['lastname_err']);
	$address_err 	= $_SESSION['address_err'];		unset($_SESSION['address_err']);
	$email_err 		= $_SESSION['email_err'];		unset($_SESSION['email_err']);
	$bday_err 		= $_SESSION['bday_err'];		unset($_SESSION['bday_err']);
	$contact_err 	= $_SESSION['contact_err'];		unset($_SESSION['contact_err']);
	$gender_err 	= $_SESSION['gender_err'];		unset($_SESSION['gender_err']);
	$shirt_err 		= $_SESSION['shirt_err'];		unset($_SESSION['shirt_err']);

	unset($_SESSION['valid']);
}
else {
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
	unset($_SESSION['address']);
	unset($_SESSION['email']);
	unset($_SESSION['bday']);
	unset($_SESSION['contact']);
	unset($_SESSION['gender']);
	unset($_SESSION['shirt']);

	unset($_SESSION['firstname_err']);
	unset($_SESSION['lastname_err']);
	unset($_SESSION['address_err']);
	unset($_SESSION['email_err']);
	unset($_SESSION['bday_err']);
	unset($_SESSION['contact_err']);
	unset($_SESSION['gender_err']);
	unset($_SESSION['shirt_err']);
}
// var_dump($error);
// var_dump($firstname[0]);

define('access_const',true);
require "partials/template.php";

function page_title() {
	echo "Run For Earth";
}

function page_css() {
	echo "assets/css/index.css";
}

function page_content() {
	?>	
		<!-- Header -->
		<div class="header" id="home">
			<div class="container">
				<div class="row justify-content-center">
					<div class="inner col-lg-8 col-xs-12">
						<img class="img-fluid" src="assets/images/header.png">
						<div class="camp-desc text-center mt-1">A 3K run alongside the candidates of Miss Earth Philippines Earth 2015</div>
						<div class="camp-desc text-center">to aid the Calumpang River Rehabilitation</div>
						<div class="evt-details text-center mt-4">APRIL 2015 | Assembly time: 5:00AM | SM City Batangas Parking Grounds</div>
						<div class="reg-fee text-center">Registration fee: Php500 inclusive of race kit with shirt</div>
						<a href="#register"><button class="register-btn btn btn-outline-success text-center mt-4 rounded-0">Register now!</button></a>
					</div>	
				</div>		
			</div>
		</div>

		<!-- Registration Form -->
		<div class="main pb-4" id="register">
			<div class="container">
				<div class="row justify-content-center">
					<div class="inner col-lg-8 col-xs-12">
						<h3 class="sec-title text-uppercase mt-4">sign up</h3>
						<img class="mb-2" src="assets/images/section-divider.png">
						<p class="sec-instruction text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
						<form class="w-100" action="functions/register.php" method="post">
							<div class="form-container">
								<?php 
								if(isset($GLOBALS['error'])) {
									for ($i=0; $i < count($GLOBALS['firstname']) ; $i++) { 
										
										if($i==0) {
											?>
											<h5 class='form-header text-light'>
												Participant <?php echo $i+1?>	
											</h5>
											<?php
										}
										else  {
											?>
											<hr>
											<h5 class='form-header text-light'>
												Participant <?=$i+1;?> 
												<button type='button' class='close close-form'>&times;</button>
											</h5>
											<?php
										}
										?>
										<div class="form-group">
											<span>
												<input class="form-control" type="text" name="first-name[]" placeholder="First Name" 
												value="<?=$GLOBALS['firstname'][$i]?>" required>
												<span class="errmsg text-danger">
													<?=$GLOBALS['firstname_err'][$i]?>
												</span>
											</span>
											<span>
												<input class="form-control" type="text" name="last-name[]" placeholder="Last Name"
												value="<?=$GLOBALS['lastname'][$i]?>" required>
												<span class="errmsg text-danger">
													<?=$GLOBALS['lastname_err'][$i]?>
												</span>
											</span>
											<span class="span1">
												<input class="form-control" type="text" name="address[]" placeholder="Complete Address" 
												value="<?=$GLOBALS['address'][$i]?>" required>
												<span class="errmsg text-danger">
													<?=$GLOBALS['address_err'][$i]?>
												</span>
											</span>
											<span class="span1">
												<input class="form-control" type="email" name="email[]" placeholder="Email Address"
												value="<?=$GLOBALS['email'][$i]?>" required>
												<span class="errmsg text-danger">
													<?=$GLOBALS['email_err'][$i]?>
												</span>
											</span>
											<span>
												<input class="form-control" placeholder="Birthday" type="text" name="bday[]" onfocus="(this.type='date')" onblur="(this.type='text')" max="2017-12-31" value="<?=$GLOBALS['bday'][$i]?>" required>
												<span class="errmsg text-danger">
													<?=$GLOBALS['bday_err'][$i]?>
												</span>
											</span>
											<span>
												<input class="form-control" type="number" name="contact[]" placeholder="Contact Number" 
												value="<?=$GLOBALS['contact'][$i]?>">
												<span class="errmsg text-danger">
													<?=$GLOBALS['contact_err'][$i]?>
												</span>
											</span>
											<span>
												<select class="form-control" name="gender[]"
												value="<?=$GLOBALS['gender'][$i]?>" required>
													<option value=""disabled>Gender</option>
													<option value="m">Male</option>
													<option value="f">Female</option>
												</select>
												<span class="errmsg text-danger">
													<?=$GLOBALS['gender_err'][$i]?>
												</span>
											</span>
											<span>
												<select class="form-control" name="shirt[]"
												value="<?=$GLOBALS['shirt'][$i]?>"  required>
													<option value=""disabled>Shirt Size</option>
													<option value="s">Small</option>
													<option value="m">Medium</option>
													<option value="l">Large</option>
													<option value="xl">XL</option>
													<option value="xxl">XXL</option>
												</select>
												<span class="errmsg text-danger">
													<?=$GLOBALS['shirt_err'][$i]?>
												</span>
											</span>
										</div>
										<?php
									}
								}
								else {
									?>
									<div class="form-group">
										<span>
											<input class="form-control" type="text" name="first-name[]" placeholder="First Name" required>
											<span class="errmsg errmsg text-danger"></span>
										</span>
										<span>
											<input class="form-control" type="text" name="last-name[]" placeholder="Last Name" required>
											<span class="errmsg text-danger"></span>
										</span>
										<span class="span1">
											<input class="form-control" type="text" name="address[]" placeholder="Complete Address" required>
											<span class="errmsg text-danger"></span>
										</span>
										<span class="span1">
											<input class="form-control" type="email" name="email[]" placeholder="Email Address" required>
											<span class="errmsg text-danger"></span>
										</span>
										<span>
											<input class="form-control" placeholder="Birthday" type="text" name="bday[]" onfocus="(this.type='date')" onblur="(this.type='text')" max="2017-12-31" required>
											<span class="errmsg text-danger"></span>
										</span>
										<span>
											<input class="form-control" type="number" name="contact[]" placeholder="Contact Number">
											<span class="errmsg text-danger"></span>
										</span>
										<span>
											<select class="form-control" name="gender[]" required>
												<option value="" selected disabled>Gender</option>
												<option value="m">Male</option>
												<option value="f">Female</option>
											</select>
											<span class="errmsg text-danger"></span>
										</span>
										<span>
											<select class="form-control" name="shirt[]" required>
												<option value="" selected disabled>Shirt Size</option>
												<option value="s">Small</option>
												<option value="m">Medium</option>
												<option value="l">Large</option>
												<option value="xl">XL</option>
												<option value="xxl">XXL</option>
											</select>
											<span class="errmsg text-danger"></span>
										</span>
									</div>
									<?php
								}
								?>

							</div>
							<div class="form-add-terms mt-4">
								<div class="addform">
									<button type="button" class="addform-btn btn btn-primary rounded-0 mr-3">
										<span>+</span>
									</button>
									Add more participants
								</div>
								<div class="terms py-3 py-md-0">
									<input class="terms-checkbox mr-2" type="checkbox" name="terms" required>
									<a href="#" data-toggle="modal" data-target="#termsModal">I have read and understand the terms and conditions</a>
								</div>
							</div>
							<div class="submit-container d-flex justify-content-end mt-3">
								<button type="submit" class="submit-btn btn btn-success rounded-0 text-uppercase">submit</button>
							</div>
						</form>
					</div>	
				</div>		
			</div>
		</div>
	<?php 
	require "partials/modal.php";
}
?>

