<html>
<head>
<title>SPS | Log in</title>
</head>

<?php
session_start();

include 'connect.php';

//error_reporting(0); //get rid of annoying notice/warning report

if (isset($_POST['submit']))
{
	
	if (empty($_POST['username']) || empty($_POST['password']))
	{
		echo "Username or Password is empty.";
	}else
	{
		//assign username and password
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		//protect mySQL injection for security
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connect, $username);
		$password = mysqli_real_escape_string($connect, $password); 
		
		//sql query to fetch DB (users) information
		
		$user_check = mysqli_query($connect, "SELECT username FROM customers WHERE username='$username'");
		$do_user_check = mysqli_num_rows($user_check);
		$pass_check = mysqli_query($connect, "SELECT password FROM customers WHERE password='$password'");
		$do_pass_check = mysqli_num_rows($pass_check);
		
		if(($do_user_check > 0) && ($do_pass_check > 0))
		{
			header("refresh:1;url=locations.php");
			echo "Log in successful";
			$_SESSION['login_user']=$username;
			$_SESSION['isLogin']=1;
		} else{
			echo "Username or Password is invalid.";
		}
		
		mysqli_close($connect);
	}
}

if(isset($_SESSION['login_user']))
{
	header("locations.php");
	exit(0);
}
?>
	<body style='font-family: times new roman, sans-serif; font-size: 120%'>
		<div style='width: 50%; padding: 5px 15px 5px; border: 1px solid #e3e3e3; background-color: white; color: #000; margin-left:25%; margin-top: 10%;'>
			
			<h1>Log in</h1>
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
						<td><input type="submit" name="submit" value="Log in"/></td>
					</tr>		
				</table>
			</form>
			
			<h6>
				New user? Register <a href='register.php'>here</a>
				<br/><br/><a href='Welcome.php'>Go back to Home page</a>
			</h6>			
		</div>
	</body>
</html>