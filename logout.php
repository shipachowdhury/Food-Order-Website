<?php 

include('constant.php');
session_destroy();
header('location:'.SITEURL.'login.php');


?>