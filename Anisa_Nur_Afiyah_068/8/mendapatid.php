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
	if(mysqli_query($conn, $sql)){
		$last_id = mysql_insert_id($conn);
		echo "new record created successfully. lasr Inserted, ID is :" .$last_id;
	}else{
		echo "Error : " .$sql. " <br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	?>