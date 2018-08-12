<?php
session_start();
		if (isset($_SESSION['isLogin']))
		{
			$loginuser = $_SESSION['login_user'];
			$isLogin = $_SESSION['isLogin'];
			echo "Welcome, $loginuser!";
			echo '<form action="logout.php"><input type="submit" name="logout" value="Log out"/></form><br>';
		} else {
			$isLogin=0;
			echo "Welcome, user!";
		}
?>