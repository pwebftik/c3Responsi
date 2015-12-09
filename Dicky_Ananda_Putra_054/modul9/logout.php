<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['username']);

echo "berhasil logout, silahkan login lagi  <a href='login.php'>LOGIN</a>";
?>