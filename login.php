
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
			background-color: #577284;
		}
		.form {
				width: 400px;
			    height: 400px;
			    background: #fff;
			    color: #000;
			    top: 50%;
			    left: 50%;
			    position: absolute;
			    transform: translate(-50%,-50%);
			    box-sizing: border-box;
			    padding: 80px 30px;
		}
		.form h1 {
			 margin: 0;
   			 padding: 0 0 10px;
   			 text-align: center;
   			 font-size: 30px;
		}
		.form input[type = "text"]{
			width: 100%;
			margin-top: 10px;
		    margin-bottom: 20px;
		    border: none;
		    border-bottom: 1px solid #000;
		    background: transparent;
		    outline: none;
		    height: 40px;
		    color: #000;
		    font-size: 16px;
		}
		.form input[type="password"] {
		    width: 100%;
		    margin-bottom: 20px;
		    border: none;
		    border-bottom: 1px solid #000;
		    background: transparent;
		    outline: none;
		    height: 40px;
		    color: #000;
		    font-size: 16px;
		}

		.form input[type="submit"]
		{
		    width: 60%;
		    margin-bottom: 20px;
		    margin-top: 30px;
		    border: none;
		    margin-left: 2px;
		    outline: none;
		    height: 40px;
		    background: #1c8adb;
		    color: #fff;
		    font-size: 18px;
		    border-radius: 18px;
		    transition: 1s all;
		    -webkit-transition-property: width;
		    -webkit-transition-duration: 2s;
		    transition-property: width;
		    transition-duration: 2s;
		    letter-spacing: 2px;
		    cursor: pointer;

		}
		.form a{
			text-decoration: none;
			font-size: 18px;
			color: #1c8adb;
		}
		.form p{
			font-size: 18px;
		}

	</style>
</head>
<body>
<form action="login.php" method="POST" class= "form">

	<h1>Login Form</h1>
	<input type="text" name="username" placeholder="Enter your username">
	<input type="password" name="password" placeholder="Enter your password">
	<input type="submit" name="submit" value="submit">
	 <p>If you arn't registered! <a href="signup.php">sign up </a></p>
</form>
</body>
</html>

<?php
	session_start();
	$username = "";

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	//$admin = "Admin";
	//$branch = "Branch";
	//$customer = "customer";
	
	$connection = mysqli_connect("localhost","root","","login");
	
	if(!$connection){
		echo "connection is not establish". mysqli_error();
	}
	else
		echo "connection is establish";

	$query = mysqli_query($connection, "select * from company where username = '$username'AND password = '$password'");
	$row = mysqli_fetch_array($query);
	$type = $row['role'];

	if (mysqli_num_rows($query) == 1) {
		$_SESSION["type"] = $row['role'];
		$_SESSION['username'] = $username;

		if ($type == "admin") {
			header('location: profile.php');
		} else if($type == "Branch"){
			header('location: branch.php');
		} 
		else{
			header('location: customer.php');
		}
		
	} else {
		echo "You arn't registered";	
	}
	
	/*
	$query_admin = mysqli_query($connection, "select * from company where username = '$username'AND password = '$password'AND role = '$admin'");
	$result_admin = mysqli_num_rows($query_admin);

	$query_branch = mysqli_query($connection, "select * from company where username = '$username'AND password = '$password'AND role = '$branch'");
	$result_branch = mysqli_num_rows($query_branch);

	$query_customer = mysqli_query($connection, "select * from company where username = '$username'AND password = '$password'AND role = '$customer'");
	$result_customer = mysqli_num_rows($query_customer);



	if($result_admin == 1){
		header('location: profile.php');
	}
	else if ($result_branch == 1) {
		header('location: branch.php');
	} else if ($result_customer == 1) {
		header('location: customer.php');
	} else {
		echo "You arn't registered";	
	} */
	


}

?>

