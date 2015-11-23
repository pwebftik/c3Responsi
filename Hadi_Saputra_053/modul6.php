<?php
$t = date("H");

if ($t < "20"){
	echo "Have a good day!";
} 

$s = date("H");

if ($s < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
	echo "<br>";
}
$t = date ("H");

if ($t < "10") {
	echo "Have a good morning!";
} elseif ($t < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}
$t = date ("H");
if ($t < "10") {
	echo "Have a good morning!";
} elseif ($t < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";}
$favcolor = "pink";
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
		break;}
		$x = 1;
		while ($x <= 5) {
			echo "The number is: $x <br>";
			$x++;
		}
		$x = 1;
		do {
			echo "The number is: $x <br>";
			$x++;
		} while ($x <= 5);

	$x = 1;
	do {
		echo "The number is: $x <br>";
		$x++;
	} while ($x <= 5);
	for ($x = 0; $x <= 10; $x++){
		echo "The number is: $x <br>";
	}
	$colors = array ("red","green","blue", "yellow");
	foreach ($colors as $value){
		echo "$value <br>";
	}
	$x = 10;
	$y = 3;
	echo $x+$y."<br>";
	echo $x-$y."<br>";
	echo $x*$y."<br>";
	echo $x/$y."<br>";
	echo $x%$y."<br>";
	echo $x**$y."<br>";
	var_dump($x==$y);echo "<br>";
	var_dump($x===$y);echo "<br>";
	var_dump($x!=$y);echo "<br>";
	var_dump($x>$y);echo "<br>";
	var_dump($x<$y);echo "<br>";
	var_dump($x!==$y);echo "<br>";
	var_dump($x>=$y);echo "<br>";
	var_dump($x<=$y);echo "<br>";
	echo $x++."<br>";
	echo $x."<br>";
	echo ++$x."<br>";
	echo $x."<br>";
	echo $x--."<br>";
	echo $x."<br>";
	echo --$x."<br>";
	echo $x."<br>";
	var_dump(!($x==10 xor $y == 0));
	echo "<br>";
	echo "<br>";
	$text = "Hello";
	$text = "World";
	$new = $text."and program";
	echo "$text <br>";
	echo "$new <br>";
	$array_orang = ["hilmy","bayu","dewo"];
	foreach ($array_orang as $orang) {
		echo "ih...$orang, gagah betz! <br>";
	foreach (["Yasmin","nisa",] as $orang) {
		echo "ih...$orang, cantik betz! <br>";
	}}
 ?>