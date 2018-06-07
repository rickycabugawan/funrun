<?php
if(!$_SESSION['funrun']){
	die('Direct access not permitted.');
}

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'funrun';

$conn = mysqli_connect($host,$username,$password,$db);
mysqli_set_charset($conn,'utf8');

// if($conn)
//  	echo 'Connected Successfully';
 ?>