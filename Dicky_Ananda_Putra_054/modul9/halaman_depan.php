<?php 
session_start();

if(!isset($_SESSION['login']) && $_SESSION['login'] != true) {
	echo "Anda belum login silahkan <a href='login.php'>login</a> dulu";
}

else {
	echo "disini kosong silahkan <a href='logout.php'>Logout</a>";
}
?>


