<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0].", ".$cars[1] . "and". $cars[2]. ".";

	echo count($cars);
	 for($x = 0; $x < $arrlength; $x++){
	 	echo $cars[$x];
	 	echo "<br";
	 }
$age = array("Petter" => "35", "Ben" => "37", "Joe" => "43");
echo "Petter is " . $age['Petter'] . "years old.";
	foreach ($age as $x => $x_value) {
		echo "Key = " . $x. ", Value= ". $x_value;
		echo "<br>";
	}
$mobil = array
(
	array("Mobilio", 22, 18),
	array("Jazz", 15,13),
	array("Inova", 5,1),
	array("Land Rover", 17,15)
);
	for ($row = 0; $row < 4; $row++) {
		echo "<p><b> Row number $row</b></p>";
		echo "<ul>";
			for ($col = 0; $col <3; $col++){
				echo "<li>". $mobil[$row][$col]."</li>";
			}
	echo "</ul>";
	} 
?>

</body>
</html>