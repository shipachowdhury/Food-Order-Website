<?php 
 
 if(!isset($_SESSION['user']))
 {
 	$_SESSION['no-login-message'] = "<div> Please login to access Admin Panel </div>";
 	header('location:'.SITEURL.'login.php');
 }

?>