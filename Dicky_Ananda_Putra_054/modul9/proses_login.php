<?php
session_start();

if ($_POST['username'] == 'dicky' && $_POST['password'] == 'rahasia') {
	$_SESSION['login'] = true;
	$_SESSION['username'] = $_POST['username'];
	echo "Login berhasil anda akan dialihkan ke halaman depan dalam 5 detik";
	echo '<meta http-equiv="refresh" content="5; url=halaman_depan.php">';
}	
else{
	echo "username atau password salah";
	}

?>
