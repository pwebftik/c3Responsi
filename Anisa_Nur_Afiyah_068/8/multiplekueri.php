<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
	//Check cection
	if(!$conn){
		die("Conection failed : " . mysqli_connect_error());
	} 

$sql = "Insert into MyGuest (FIRSTNAME, LASTNAME, EMAIL)
	VALUES ('Anisa', 'Nur', 'Anisanur@gmail.com')";
$sql = "Insert into MyGuest (FIRSTNAME, LASTNAME, EMAIL)
	VALUES ('nisa', 'Nur', 'nisanur@gmail.com')";
$sql = "Insert into MyGuest (FIRSTNAME, LASTNAME, EMAIL)
	VALUES ('Afiyah', 'Nur', 'Afiyahur@gmail.com')";

	if(mysqli_query($conn, $sql)){
		echo "berhasil";
	}else{
		echo "gagal" .$sql."<br>". mysqli_error($conn);
	}
	mysqli_close($conn);
	?>