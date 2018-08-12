<?php 
include 'connect.php';

if(isset($_POST['submit']))
{
$username = $_POST['username'];

$password = $_POST['password'];

$email = $_POST['email'];



//check if all inputs are filled in


if(empty($username)){

die("Please enter your username.<br>");

}


if(empty($password)){

die("Please enter your password.<br>");

}


if(empty($email)){

die("Please enter your email.");

}


//check if this username is already in use

$user_check = mysqli_query($connect, "SELECT username FROM Customers WHERE username='$username'");

$do_user_check = mysqli_num_rows($user_check);


//check if email is already in use


$email_check = mysqli_query($connect, "SELECT email FROM Customers WHERE email='$email'");

$do_email_check = mysqli_num_rows($email_check);


//Now display errors


if($do_user_check > 0){

die("Username is already in use.<br>");

}


if($do_email_check > 0){

die("Email is already in use.");

}


//Register this user if every condition is satisfied


$insert = mysqli_query($connect, "INSERT INTO Customers (username, password, email) VALUES ('$username', '$password', '$email')");

if(!$insert){

die("There's little problem: ".mysql_error());

}


echo $username.", You are now registered. Thank you!";
echo "<a href='login.php'><br />Back to Login Page</a>";
}

?> 
<html>
<head>
<title>SPS | Register</title>
</head>

	<body style='font-family: times new roman, sans-serif; font-size: 120%'>
		<div style='width: 50%; padding: 5px 15px 5px; border: 1px solid #e3e3e3; background-color: white; color: #000; margin-left:25%; margin-top: 10%;'>
			
			<h1>Register</h1>
			<br />
			
			
			<form action="" method="post">
				<table>
				
					<tr>
						<td><b>Username:</b><input type="text" name="username" style='padding: 4px; margin-left:2px;'/> </td>
					</tr>
					<tr>
						<td><b>Password:</b><input type="password" name="password" style='padding: 4px; margin-left:5px;'/> </td>
					</tr>
					<tr>
						<td><b>Email:</b><input type="text" name="email" style='padding: 4px; margin-left:30px;'/> </td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Register"/></td>
					</tr>		
				</table>
			</form>
		</div>
	</body>
</html>
