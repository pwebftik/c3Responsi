<?php session_start();
	unset($_SESSION['login']);
	unset($_SESSION['username']);
	echo "Sukses Logout. <a href link='login.php'>Login</a> ";
 ?>