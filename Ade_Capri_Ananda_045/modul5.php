<!DOCTYPE html>
<html>
<head>
<title>Responsi Modul 5: Dasar PHP</title>
</head>

<body>


<a name="no1"></a>
<h1>Nomor 1 & 2</h1>
<?php
	echo "Hello World";
	echo "<br>";
?>

<!-- Nomor 3 -->
<h1>Nomor 3</h1>
<?php	
	//single-line commnent
	#single-line comment
	/*multiple-line 
	comment*/
	//you can also use comment to leave out parts of a code line
	$x=5 /*+15*/+5;
	echo $x;
	echo "<br>";
?>

<!-- Nomor 4 -->
<h1>Nomor 4</h1>
<?php
	$color = "red";
	echo "My car is ".$color."<br>";
	echo "My car is ".$COLOR."<br>";
	echo "My car is ".$coloR."<br>";
?>

<!-- NOmor 5 -->
<h1>Nomor 5</h1>
<?php
$txt = "Hello World";
$xx=5;
$y=10.5;

echo $txt."<br>";
echo $xx."<br>";
echo $y."<br>";
?>

<!-- Nomor 6 -->
<a name="no6"></a>
<h1>Nomor 6</h1>
<?php
$txt6 = "W3Schools.com";
echo "I love $txt6 !";
?>

<!-- Nomor 7 -->
<h1>Nomor 7</h1>
<?php
$txt6 = "W3Schools.com";
echo "I love ".$txt6." !";
?>

<!-- Nomor 8 -->
<h1>Nomor 8</h1>
<?php
$a=5;
$b = 4;

echo $a+$b;
?>

<!-- Nomor 9 -->
<h1>Nomor 9</h1>
<?php
 echo "Jumlah Huruf Hello World! ".strlen("Hello World!"); //output 12
?>

<!-- Nomor 10 -->
<h1>Nomor 10</h1>
<?php
echo "Jumlah kata Hello World! ".str_word_count("Hello World!");// output 2

?>
<!-- Nomor 11 -->
<a name="no11"></a>
<h1>Nomor 11</h1>
<?php
echo "Kata Hello World! jika dibalik akan menjadi seperti ini ".strrev("Hello World!");

?>

<!-- Nomor 12 -->
<h1>Nomor 12</h1>
<?php
echo strpos("Hello World!", "World");
?>

 <!-- Nomor 13 -->
 <h1>Nomor 13</h1>
<?php
echo str_replace("World!", "Dolly", "Hello World!");
?>

<!-- Nomor 14 -->
<h1>Nomor 14</h1>
<?php
function writeMsg(){
	echo "Hello World!";
}

writeMsg();
?>

<!-- Nomor 15 -->
<h1>Nomor 15</h1>
<?php
function familyName($fname){
	echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai jim");
familyName("Borge");
?>

<!-- Nomor 16 -->
<a name="no16"></a>
<h1>Nomor 16</h1>
<?php
	function familyNames($fnames, $year){
	echo "$fnames Refsnes Born In $year.<br>";
}

	familyNames("Hege", "1975");
	familyNames("Stale", "1978");
	familyNames("Kai jim", "1983");
?>

<!-- Nomor 17 -->
<h1>Nomor 17</h1>
<?php
	function setHeight($min_height = 50){
		echo "The Height is = $min_height <br>";
	}
	setHeight(350);
	setHeight();//set default as 50
	setHeight(135);
	setHeight(80);
	
?>

<!-- Nomor 18-->
<h1>Nomor 18</h1>
<?php
	function sum($aa, $bb){
	$z = $aa + $bb;
	return $z;
	}
	
	echo "5 + 10 = ".sum(5, 10)."<br>";
	echo "7 + 13 = ".sum(7, 13)."<br>";
	echo "2 + 4 = ".sum(2, 4);
?>



</body>
</html>
