<html>
<body>
<?php
	echo "Hello World"."<br>";
	?>
	<?php
//Ini merupakan satu bari komentar
	#Ini juga komentar
	/*Siapa bilang ini bukan komentar*/
	//ini juga keles


$color = "red";
	echo "My car is".$color."<br>";
	echo "My house is".$COLOR."<br>";
	echo "My boat is".$color."<br>";
	?>

$txt = "Hellow World!";
$x = 5;
$y = 10.5;.
?>

<?php
$txt = "W3Schools.com"."<br>";
echo "I love $txt!";
?>

<?php
$txt = "w3school.com";
echo "I love" . $txt. "!";
?>

<?php
echo strlen("Hellow World"); //panjang string = outputs 12
?>

<?php
echo str_word_count("Hello World!"); // jumlah kata = outputs 2
?>

<?php
echo strrev("Hello World");//outputs !dlroW olleH
?>

<?php
echo strpos("Hello World!", "world"); // outputs 6
?>

<?php
echo str_replace("Wolrd", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>

<?php
function writeMsg() {
	echo "Hello World!";
}
writeMsg(); // call the function
?>

<?php
function familyName($fname, $year){
	echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hege", "1975");
familyName("Hege", "1978");
familyName("Kai Jim", "1983");
?>
<?php
function setHeight($minheight =50){
	echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); //will use the default value of 50
setHeight(135);
setHeight(80);
?>
<?php
function sum($x, $y) {
	$z = $x +$y;
	return $z;
}
echo "5 + 10 = "  . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>
</html>
</body>