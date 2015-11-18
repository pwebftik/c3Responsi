<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php 
function nl(){
    echo "<br>";
}
function nll(){
    echo "<br><br>";
}

$t=date("H");
if ($t<"20") {
    echo "Have a good day!<br>";
}

$t=date("H");
if ($t<"20") {
    echo "Have a good day!<br>";
}
else {
    echo "Have a good night!<br>";
}

$t=date("H");
if ($t<"10") {
    echo "Have a good morning!<br>";
}
elseif ($t<"20") {
    echo "Have a good day!<br>";
}
else {
    echo "Have a good night!<br>";
}

$favcol="blue";

switch ($favcol) {
    case "red":
        echo "yer favcolor is red<br>";
        break;
    case "blue":
        echo "yer favcolor is blue<br>";
        break;
    
    default:
        echo "yer favcolor is nuffin'<br>";
        break;
}


$x=1;

while ( $x <= 5) {
    echo "The number is $x<br>";
    $x++;
}

$z=1;
do {
    echo "Angkanya adalah $z<br>";
    $z++;
} while ($z <= 5);

for ($x=0; $x <= 10 ; $x++) { 
    echo "The number is $x<br>";
}

$colors=array("red","green","blue","yellow");
foreach ($colors as $value) {
    echo "$value<br>";
}

$x=10;
$y=3;
echo $x+$y."<br>";
echo $x-$y."<br>";
echo $x*$y."<br>";
echo $x/$y."<br>";
echo $x%$y."<br>";
echo $x**$y."<br>"; //pangkat
echo pow($x,-$y)."<br>"; //pangkat
var_dump($x==$y);echo "<br>"; //bool vardump harus bertipe sama;
var_dump($x>=$y);echo "<br>"; //bool vardump harus bertipe sama;
var_dump($x<=$y);echo "<br>"; //bool vardump harus bertipe sama;
var_dump($x!=$y);echo "<br>"; //bool vardump harus bertipe sama;
var_dump($x>$y);echo "<br>"; //bool vardump harus bertipe sama;
var_dump($x<$y);echo "<br>"; //bool vardump harus bertipe sama;
var_dump($x<>$y);echo "<br>"; //bool vardump harus bertipe sama;

echo $x++."<br>";
echo $x."<br>";

echo ++$x."<br>";
echo $x."<br>";

echo $x--."<br>";
echo $x."<br>";

echo --$x."<br>";
echo $x."<br>";

var_dump(($x==0 or $y==4));nl();
var_dump(!($x==0 or $y==4));nll();

var_dump(($x==0 xor $y==4));nl();
var_dump(!($x==0 xor $y==4));nll();

var_dump(($x==0 and $y==4));nl();
var_dump(!($x==0 and $y==4));nll();

var_dump(($x==0 && $y==4));nl();
var_dump(!($x==0 && $y==4));nll();

var_dump(($x==0 || $y==4));nl();
var_dump(!($x==0 || $y==4));nll();

$text= "Hello";
$text.= "World";
$new = $text." And Program";
echo "$text<br>";
echo "new<br>";

$arrayorang=["yasmine","nabil","yha"];
foreach ($arrayorang as $orang) {
    echo "nama saya $orang ww<br>";
}

$arrayorang=array("yasmine","nabil","yha");
foreach ($arrayorang as $orang) {
    echo "tapi yha begitu $orang ww<br>";
}

foreach (["yasmine","nabil","yha"] as $orang) {
    echo "nama saya $orang wkkw<br>";
}


$x=10;
$x+=3;
echo $x."<br>";

$x=10;
$x-=3;
echo $x."<br>";

$x=10;
$x/=3;
echo $x."<br>";

$x=10;
$x%=3;
echo $x."<br>";

$x=10;
$x+=3;
echo $x."<br>";



 ?>

</body>
</html>