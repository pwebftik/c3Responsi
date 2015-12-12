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
	$sql = "UPDATE MyGuest SET lastname='Doe' Where id=2";
	if(mysqli_query($conn, $sql)){
		echo "berhasil";
	} else{
	echo "gagal". mysqli_error($conn);
}
msqli_close($conn);
?>