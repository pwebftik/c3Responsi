<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check
if(!$conn)
{
	die("Koneksi gagal : " . mysqli_connect_error());
}     

$sql = "Insert into MyGuest (FIRSTNAME, LASTNAME, EMAIL)
	VALUES ('Anisa', 'Nur', 'Anisanur@gmaqil.com')";
	if(mysqli_query($conn, $sql)){
	echo "Pendaftaran berhasil";
}
else{
	echo "Pendaftaran gagal." . mysqli_error($conn);
}
?>
</body>
</html>