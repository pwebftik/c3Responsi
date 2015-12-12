<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modul8";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check
if(!$conn)
{
	die("Koneksi gagal : " . mysqli_connect_error());
}
else
echo "Koneksi Berhasil<br><br>";

$sql = "create table myGuest(
	id int(6) unsigned auto_increment primary key,
	firstname varchar(30) not null,
	lastname varchar(30) not null,
	email varchar(50),
	reg_date timestamp
	)";

if(mysqli_query($conn, $sql)){
	echo "Tabel myGuest berhasil dibuat";
}
else{
	echo "Error creating table" . mysqli_error($conn);
}


?>