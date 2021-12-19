<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Food Order System</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
   <div class="login">
   	<h1 class="text-center">Login</h1><br>

   	<?php 
     
     if(isset($_SESSION['login']))
     {
     	echo $_SESSION['login'];
     	unset ($_SESSION['login']);
     }

     if(isset($_SESSION['no-login-message']))
     {

     	echo $_SESSION['no-login-message'];
     	unset ($_SESSION['no-login-message']);
     }
     ?>
   	<form action="" method="POST" class="text-center"><br>
   		Username:<br>
   		<input type="text" name="username" placeholder="Enter Username"><br><br>
   		Password:<br>
   		<input type="password" name="password" placeholder="Enter Password"><br><br>
   		<input type="submit" name="submit" value="Login" class="btn-primary"><br>

   	</form>


   </div>
</body>
</html>

<?php 

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ";
	$res = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($res);
	if($count==1)
	{
		$_SESSION['login'] = "<div> Login Successful.</div>";
		$_SESSION['user'] = $username;

		header('location:'.SITEURL.'');
	}
	else
	{
		$_SESSION['login'] = "<div> Login Failed.</div>";
		header('location:'.SITEURL.'login.php');
	}
}

?>