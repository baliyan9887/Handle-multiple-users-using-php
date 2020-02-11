<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1 style="text-align: center; margin-top: 5%;">Hello! Mr.
	 <?php
	 $connection = mysqli_connect("localhost","root","","login");
	session_start();
	$username = $_SESSION['username']; 
	echo ucwords($username);
	if (!$_SESSION['username']) {
		header('location: login.php');
	} elseif ($_SESSION['type'] !== 'Branch') {
		header('location: login.php');
	}
	else 
	{
		$username = $_SESSION['username'];
	}
	?> 
</h1>
	<h1 style="text-align: center; margin-top: 1%; font-size: 40px;">Welcome To Branch Page </h1>
	<a style="margin-left: 48%; margin-top: 5%; text-decoration: none; color: red;" href="login.php">Log out</a>
</body>
</html>
