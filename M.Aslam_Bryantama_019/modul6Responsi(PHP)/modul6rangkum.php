<!DOCTYPE html>
<html>
<head>
	<title>Rangkuman modul 6</title>
</head>
<body>
<h3>If statement</h3>
<?php
	$t = date("H");

	if($t < "20"){
		echo "Have a good day!";
	}
?>

<h3>if .. else statement</h3>
<?php
	$t = date("H");

	if($t < "20"){
		echo "Have a good day!";
		}
		else{
			echo "Have a good night!";
		}
?>

<h3>if .. elseif .. else statement</h3>
<?php
	$t = date("H");

	if($t < "10"){
		echo "Have a good morning!";
		}
		elseif ($t < "20") {
			echo "Have a good day!";
		}
		else {
			echo "Have a good night";
		}
?>

<h3>switch statement</h3>
<?php
	$favcolor ="red";

	switch ($favcolor) {
		case "red":
			echo "Your favorite color is red!";
			break;
		case "blue":
			echo "Your favorite color is blue!";
			break;
		case "green":
			echo "Your favorite color is green!";
			break;
		
		default:
			echo "Your favorite color is none!";
			break;
	}
?>

<h3>perulangan while</h3>
<?php
	$x = 1;

	while ($x <= 5) {
		echo "The number is : $x <br>";
		$x++;
	}
?>

<h3>perulangan do .. while</h3>
<?php
	$x = 1;

	do {
		echo "The number is : $x <br>";
		$x++;
	} while ($x <= 5);
?>

<h3>perulangan for</h3>
<?php
	for ($x= 0; $x <= 10; $x++){
		echo "The number is : $x <br>";
	}
?>

<h3>perulangan foreach</h3>
<?php
	$colors = array("red","green","blue","yellow");

	foreach ($colors as $value) {
		echo "$value <br>";
	}
?>

<h3>Fungsi lain lain & array</h3>
<?php
	$x=4;
	$y=2;
	echo $x+$y."<br>";
	echo $x-$y."<br>";
	echo $x*$y."<br>";
	echo $x/$y."<br>";
	echo $x%$y."<br>";
	echo pow($x,-$y)."<br>"; 
	var_dump($x==$y);echo "<br>";
	var_dump($x>=$y);echo "<br>"; 
	var_dump($x<=$y);echo "<br>"; 
	var_dump($x!=$y);echo "<br>"; 
	var_dump($x>$y);echo "<br>"; 
	var_dump($x<$y);echo "<br>"; 
	var_dump($x<>$y);echo "<br>"; 

	echo $x++."<br>";
	echo $x."<br>";

	echo ++$x."<br>";	
	echo $x."<br>";

	echo $x--."<br>";
	echo $x."<br>";

	echo --$x."<br>";
	echo $x."<br>";

	var_dump(($x==0 or $y==4));
	var_dump(!($x==0 or $y==4));
	echo "<br>";
	var_dump(($x==0 xor $y==4));
	var_dump(!($x==0 xor $y==4));
	echo "<br>";
	var_dump(($x==0 and $y==4));
	var_dump(!($x==0 and $y==4));
	echo "<br>";
	var_dump(($x==0 && $y==4));
	var_dump(!($x==0 && $y==4));
	echo "<br>";
	var_dump(($x==0 || $y==4));
	var_dump(!($x==0 || $y==4));
	echo "<br>";
	echo "<br>";
	$text= "Hello";
	$text.= "World";
	$new = $text." And Program";
	echo "$text<br>";
	echo "new<br>";

	echo "<br>";
	$arraynama=["aslam","bryan","abry"];
	foreach ($arraynama as $nama) {
	echo "namanya adalah $nama<br>";}	
?>

</body>
</html>