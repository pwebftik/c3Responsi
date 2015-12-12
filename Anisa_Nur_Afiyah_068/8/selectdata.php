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
	$sql =" SELECT id, firsname, lastname, FRON MyGuest";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo "id : " . $row["id"]."-
			Name : " . $row["firsname"]. "" .$row["lastname"]."<br>"; 
		}
	}else{
		echo "0 result";
	}
	mysqli_close($conn);
	?>