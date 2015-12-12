<?php 
session_start();
if($_POST['username']=='rofil' && $_POST['password'] == '12345'){
$_SESSION ['login'] = true;
$_SESSION ['username'] = $_POST['username']; 
echo "Login berhasil";
} else{
	echo "login gagal, silahkan coba lagi";
}
?>

