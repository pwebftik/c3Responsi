<?php
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername, $username, $password);
//check
if(!$conn)
{
	die("Koneksi gagal : " . mysqli_connect_error());
}
else
echo "Koneksi Berhasil<br><br>";

//create db
$sql ="CREATE DATABASE myDB";
	if(mysqli_query($conn, $sql)){
		echo "Database created successfully";
	}
	else{
		echo "Error creating database" . mysqli_error($conn);
	}
mysqli_close($conn);
?>