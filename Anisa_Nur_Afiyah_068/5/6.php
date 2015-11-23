<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$t= date("H");

if ($t < "10"){
	echo "Have a good morning";
} elseif( $t < "20" ) {
	echo "Have a good day";
} else {
	echo "Have a good night!";
}
$favcolor = "red";

switch ($favcolor) {
		case "red" :
			echo "ini warna favorite aku!";
			break;
		case "blue":
			echo "bukan warna favorite aku";
			break;
		case "green" :
			echo "ini warna yang segar";
			break;
		default :
			echo " yourfavorite color is red!";
}
$x = 1;
do {
	echo "the number is :$x <br>";
	$x++;
}	while ($x<=5);
for ($x = 0; $x <= 10; $x++) {
	echo "the number is : $x <br>";
}
$colors = array("red", "green", "blue", "yellow" );
foreach ($colors as $value) {
	echo "$value <br>"
}

?>
</body>
</html>