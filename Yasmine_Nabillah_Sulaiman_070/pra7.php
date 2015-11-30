<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php 
$cars = array ("volvo","bmw","toyota",1020);
echo "I like $cars[0], $cars[1], and $cars[2], and $cars[3].<br>";
echo count($cars)."<br>";


$arrlength=count($cars);
for ($i=0; $i < $arrlength; $i++) { 
    echo "$cars[$i]<br>";
}

$age=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $x => $x_value) {
    echo "Key = $x, value = $x_value. <br>";
}

$cars2 = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
for ($row=0; $row < 4; $row++) { 
    echo "<p><b>Row number: $row</b></p>";
    echo "<ul>";
    for ($col=0; $col<3; $col++) { 
        echo "<li>".$cars2[$row][$col]."</b></li>";
    }
    echo "</ul>";
}

 ?>
</body>
</html>