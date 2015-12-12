<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
	//Check cection
	if(!$conn->connect_error){
		die("connection failed : " .$conn->connect_error);
	}
	//prepare and bind
$stmt =$conn-
>prepare("INSERT INTO MyGuest(FIRSTNAME, LASTNAME, EMAIL) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $FIRSTNAME, $LASTNAME, $EMAIL);

//SET PARAMETERS
$FIRSNAME= "Anisa";
$LASTNAME= "Nur";
$EMAIL="Anisanur@gmail.com";
$stmt->exceute();

$FIRSNAME= "nisa";
$LASTNAME= "Nur";
$EMAIL="nisanur@gmail.com";
$stmt->exceute();

$FIRSNAME= "Afiyah";
$LASTNAME= "Nur";
$EMAIL="Afiyahnur@gmail.com";
$stmt->exceute();

echo "new record sukses";

$stmt->close();
$conn->close();
?>