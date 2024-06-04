<?php 
ob_start();
session_start();

if (isset($_SESSION['user_name'])) {

	header("Location:production");

} else {

	header("Location:production/login.php");

}

 ?>