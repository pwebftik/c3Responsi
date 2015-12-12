<?php session_start();
if(!isset ($_SESSION['login']) && $_SESSION['login'] != 'true'){
 	echo "Anda tidak berhak masuk  disini";
 }
 else{
 	echo "ini halaman admin!!";
 }
 ?>
