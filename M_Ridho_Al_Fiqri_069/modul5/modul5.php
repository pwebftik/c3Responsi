<html>
<body>

	<?php
	echo "Hellow World<br><br>";
	
	//This is a single-line comment
	#This is also a single-line comment
	/*
	This is a multiple-lines comment block that spans over multiple 
	lines
	*/
	//You can also use comments to leave out parts of a code line
	$x=5 /*+15*/+5;
	echo $x."<br><br>";
	
$color ="red";
echo $color;
$int = 0;
$string = "ini Praktikum";
$float = 0.0;
$boolean = false;
//var_dump(is_string($array));
echo "<br>";
echo "$string c3";
echo "<br>";
echo '$string c3'; //menampilkan apa yang kalian tulis
echo "<br>";
echo "<br>";
echo "My car is $color <br>";
echo "My house is $color <br>";
echo "My boat is $color<br><br>";
$txt = "Hellow World!";
$x = 5;
$y = 10.5;
$txt1 = "FTIK";
echo "I love ".$txt1."! <br>";
$txt = "w3Schools.com";
echo "I love ". $txt . "! <br>";
$x = 5;
$y = 4;
echo $x + $y;
echo "<br>";
echo strlen("Hellow World!"); // outputs 13
echo "<br>";
echo str_word_count("Hellow World!"); //outputs 2
echo "<br>";
echo strrev("Hellow World!"); //outputs !dlrow Olleh
echo "<br>";
echo strpos("Hellow World!","World");//outputs 7
echo "<br>";
echo str_replace("World","KY","Hello World"); //outputs Hellow KY
echo "<br>";
function writeMsg(){
	echo "Hello World!";
}
writeMsg(); //call the function
echo "<br> <br>";
function fname($fname){
	echo "$fname Marga<br>";
}
fname("Jani");
fname("Hege");
fname("Stale");
fname("Kai Jim");
fname("Borge");
echo "<br>";
function familyName($familyName, $year){
	echo "$familyName Setiawan. Born in $year <br>";}
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
echo "<br>";
function setHeight($setHeight = 50){
	echo "tingginya adalah : $setHeight <br>";}
	setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo "<br>";
function nilai($nama , $nilai = 100 ){
	echo "$nama mendapatkan nilai $nilai <br>";}
	nilai("Dicky","75");
	nilai("Bayu");
	echo "<br>";
function sum($x,$y){
	$z = $x + $y;
	return $z;
}
echo "5 + 10 = " . sum(5,10). "<br>";
echo "7 + 13 = " . sum(7,13). "<br>";
echo "2 + 4 = " . sum(2,4);
?>

</body>
</html>