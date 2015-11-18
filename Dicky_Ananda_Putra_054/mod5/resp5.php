<html>
<head>
	<title></title>
</head>
<body>

<?php
// ini komentar 1 baris

# sama ini juga

/* komentar
2 baris
atau lebih
*/
function pesan() {
	echo "Hello Dolly (isi fungsi pesan)";
}

function familyname($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}
function setheight($minheight = 50) {

	echo "The height is : $minheight <br>";
}

function sum($x, $y) {
	$z = $x + $y;
	return $z;
}
echo "Hello world ";

$color = "red";
$jumlah = 5;
$toko = "tokobagus.com";
$x = 5;
$y = 4;

echo "my car is " .$color. "<br>";
echo "jumlahnya ada " .$jumlah. "<br>";
echo "beli di $toko <br>";
echo "$x + $y <br>";
echo strlen("Hello Dunia"); //outputs 11
echo "<br>";
echo str_word_count("Hello Dunia Luar"); //outputs 3
echo "<br>";
echo strrev("kilabret kadit");
echo "<br>";
echo strpos("Hello world", "world"); 
echo "<br>";
echo str_replace("Dunia", "Dolly", "Hello Dunia");
echo "<br>";
pesan();
familyname("<br> Gunting", "1996");
familyname("Batu", "1945");
familyname("kertas", "2000");

setheight(500);
setheight();
setheight(90);

echo "5 + 10 = " .sum(5, 10). "<br>";
echo "7 + 2 = " .sum(7, 2). "<br>";
echo "12 + 3 = " .sum(12, 3). "<br>";
?>
</body>
</html>