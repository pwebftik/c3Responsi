<?php
	$t = date("H"); //percabangan latihan 1
	if($t < "20"){
		echo "Have a good day!";
	}
echo "<br><br>";
	$t = date("H");//latihan 2
	if($t < "20"){
		echo "Have a good day!";
	}
	else{
		echo "Have a good night!";	
	}
	echo "<br><br>";
	$t = date("H");//latihan 3
	if($t < "10"){
		echo "Have a good morning!";
	}
	elseif($t < "20"){
		echo "Have a good day!";
	}
	else{
		echo "Have a good night!";	
	}
	echo "<br><br>";
	$favcolor = "red";//latihan 4
	switch ($favcolor) {
		case 'red':
				echo "Your favorite color is red!";
			break;
		case 'blue':
				echo "Your favorite color is blue!";
			break;
		case 'green':
				echo "Your favorite color is green!";
			break;
		default:
				echo "Your favorite color is neither red, blue, nor green!";
	}
	echo "<br><br>";
	$x = 1;//perulangan latihan 1
	while( $x <= 5){
		echo "The Number is : $x <br>";
		$x++;
	}
echo "<br><br>";
	$x = 1; //latihan 2
	do{
		echo "The Number is : $x <br>";
		$x++;
	} while( $x <= 5);
	echo "<br><br>";
		for ($x=1; $x <= 5; $x++) { //latihan 3
		echo "The Number is : $x <br>";
	}
echo "<br><br>";
$colors = array("red", "green", "blue", "yellow"); //latihan 4
	foreach ($colors as $value){
		echo "$value <br>";
	}
?>