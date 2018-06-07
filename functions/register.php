<?php 
session_start();
if(!isset($_POST['first-name'])){
	die('Direct access not permitted.');
}

$_SESSION['results']=true;

$count_register = count($_POST['first-name']);

$_SESSION['valid']=true;

$_SESSION['firstname']	= [];
$_SESSION['lastname']	= [];
$_SESSION['address']	= [];
$_SESSION['email'] 		= [];
$_SESSION['bday'] 		= [];
$_SESSION['contact'] 	= [];
$_SESSION['gender'] 	= [];
$_SESSION['shirt'] 		= [];

$_SESSION['firstname_err']	= [];
$_SESSION['lastname_err']	= [];
$_SESSION['address_err']	= [];
$_SESSION['email_err'] 		= [];
$_SESSION['bday_err'] 		= [];
$_SESSION['contact_err'] 	= [];
$_SESSION['gender_err'] 	= [];
$_SESSION['shirt_err'] 		= [];


for ($i=0; $i < $count_register ; $i++) { 
	$_SESSION['firstname'][$i]	= santize_input($_POST['first-name'][$i]);
	$_SESSION['lastname'][$i]	= santize_input($_POST['last-name'][$i]);
	$_SESSION['address'][$i]	= santize_input($_POST['address'][$i]);
	$_SESSION['email'][$i] 		= santize_input($_POST['email'][$i]);
	$_SESSION['bday'][$i] 		= santize_input($_POST['bday'][$i]);
	$_SESSION['contact'][$i] 	= santize_input($_POST['contact'][$i]);
	$_SESSION['gender'][$i] 	= santize_input($_POST['gender'][$i]);
	$_SESSION['shirt'][$i] 		= santize_input($_POST['shirt'][$i]);

	$_SESSION['firstname_err'][$i]	= "";
	$_SESSION['lastname_err'][$i]	= "";
	$_SESSION['address_err'][$i]	= "";
	$_SESSION['email_err'][$i] 		= "";
	$_SESSION['bday_err'][$i] 		= "";
	$_SESSION['contact_err'][$i] 	= "";
	$_SESSION['gender_err'][$i] 	= "";
	$_SESSION['shirt_err'][$i] 		= "";

	if (!validate_name($_SESSION['firstname'][$i])) {
		$_SESSION['firstname_err'][$i] = 'Name must be a minimum of 2 characters';
		$_SESSION['valid']=false;
	}
	if (!validate_name($_SESSION['lastname'][$i])) {
		$_SESSION['lastname_err'][$i] = 'Name must be a minimum of 2 characters';
		$_SESSION['valid']=false;
	}
	if (!validate_email($_SESSION['email'][$i])) {
		$_SESSION['email_err'][$i] = 'Please enter a valid email address';
		$_SESSION['valid']=false;
	}

	if ($_SESSION['firstname'][$i]=="") {
		$_SESSION['firstname_err'][$i] = 'Please enter your first name';
		$_SESSION['valid']=false;
	}
	if ($_SESSION['lastname'][$i]=="") {
		$_SESSION['lastname_err'][$i] = 'Please enter your last name';
		$_SESSION['valid']=false;
	}
	if ($_SESSION['address'][$i]=="") {
			$_SESSION['address_err'][$i] = 'Please enter your address';
			$_SESSION['valid']=false;
		}
	if ($_SESSION['email'][$i]=="") {
			$_SESSION['email_err'][$i] = 'Please enter your email';
			$_SESSION['valid']=false;
		}
	if ($_SESSION['bday'][$i]=="") {
			$_SESSION['bday_err'][$i] = 'Please enter your birthday';
			$_SESSION['valid']=false;
		}
	if ($_SESSION['gender'][$i]=="") {
			$_SESSION['gender_err'][$i] = 'Please pick your gender';
			$_SESSION['valid']=false;
		}
	if ($_SESSION['shirt'][$i]=="") {
			$_SESSION['shirt_err'][$i] = 'Please pick your shirt size';
			$_SESSION['valid']=false;
		}

}

function santize_input($x) {
  $x = trim($x);
  $x = stripslashes($x);
  $x = htmlspecialchars($x);
  return $x;
}

function validate_name($x) {
	if (strlen($x) >= 2) {
		return true;
	}
	else return false;
}

function validate_email($x) {
	if (filter_var($x, FILTER_VALIDATE_EMAIL)) {
	  return true; 
	}
	else return false;
}

if ($_SESSION['valid']==false) {
	header('Location: ../index.php#register');
}

else {
	$_SESSION['funrun']=true;
	require "connection.php";

	for ($i=0; $i < $count_register ; $i++) { 
		$firstname 	= $_SESSION['firstname'][$i];
		$lastname 	= $_SESSION['lastname'][$i];
		$address 	= $_SESSION['address'][$i];
		$email 		= $_SESSION['email'][$i];
		$bday 		= $_SESSION['bday'][$i];
		$contact 	= $_SESSION['contact'][$i];
		$gender 	= $_SESSION['gender'][$i];
		$shirt 		= $_SESSION['shirt'][$i];

		$age = date_diff(date_create($bday), date_create('now'))->y;
		
		if ($age>=18) {
			$category = 'seniors';
		}
		else $category = 'juniors';

		$_SESSION['age'][$i] = $age;
		$_SESSION['category'][$i] = $category;

		$sql = "INSERT INTO participants
		(firstname, lastname, address, email, birthdate, age, category, gender, contactnum, shirtsize) 
		VALUES
		('$firstname','$lastname','$address','$email','$bday','$age', '$category','$gender','$contact','$shirt')";

		mysqli_query($conn,$sql) or die(mysqli_error($conn));

		$sql = "SELECT * FROM participants ORDER BY num DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		var_dump($result);
		while($row = mysqli_fetch_assoc($result)){
			$_SESSION['timestamp'] = $row['timestamp'];
		}
	}

	header('Location: ../results.php');
}

?>