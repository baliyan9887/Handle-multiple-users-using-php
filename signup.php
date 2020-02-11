<!DOCTYPE html>
<html>
<head>
	<title>Sign-up</title>
	<style>
			body{
			background-color: #577284;
		}
		.form {
				width: 400px;
			    height: 540px;
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
		.form input[type = "email"]{
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
		.form .option {
			width: 37%;
			height: 50px;
            padding-right: 40px;
            padding-left: 16px;
            color: rgba(46, 46, 46, .8);
            border: 1px solid rgb(225, 225, 225);
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
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
	<form action="signup.php" method="post" class="form">
		<h1>Sign up</h1>
		<input type="text" name="username" placeholder="Enter your username" required>
		<input type="email" name="email" placeholder="Enter your email" required>
		<input type="password" name="password" placeholder="Enter your password" required>
		<select class="option" required="" name="role">
			<option value="">select</option>
			<option value="admin">Admin</option>
			<option value="Branch">Branch</option>
			<option value="customer">customer</option>
		</select><hr style="display: inline-block; "><br>
		<input type="submit" name="submit" value="submit">
		<p>Already registered! <a href="login.php">login</a></p>
	</form>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$connection = mysqli_connect("localhost","root","","login");
	if(!$connection){
		echo "connection is not establish". mysqli_error();
	}
	else
		echo "connection is establish";

	$query = "INSERT INTO `company` (`username`, `password`, `email`, `role`) VALUES ( '$username', '$password', '$email', '$role')";
	$result = mysqli_query($connection, $query);

	if ($result) {
		echo "<script> alert('you are registered succesfully') </script>";
	}
	else
		echo "<script> alert('you missing something') </script>";
		
}
?>
