<html>
<head>
	<title></title>
</head>
<body>
<?php



function penjumlahan($a, $b) {

	$z = $a + $b;
	return $z;
}

function pengurangan() {

	$z = 5 - 3 ;
	return $z;
}

function pembagian($b1, $b2) {

	$b3 = $b1 / $b2;
	return $b3;
	
}

function perkalian($k1, $k2) {   // ini fungsi tanpa return

	echo "hasil perkalian $k1 x $k2 = " .($k1*$k2);
}

function nama($nama) {

	$ket = "";
	if ($nama == "Dicky") {
		$ket = "Kamu Pasti Sedang Praktikum $nama" ;
	}
	else {
		$ket = "Saya tidak kenal kamu $nama";
	}
	return $ket;
}



$k1 = 2;
$k2 = 5;
perkalian($k1, $k2);
echo "<br>";

echo "10 + 7 = " .penjumlahan(10, 7). "<br>";

$nama = "Dicky";
echo nama($nama);
echo "<br>";

echo 'hasil dari 5 - 3 = ' .pengurangan();

echo "<br>";
$b1 = 15;
$b2 = 3;
echo "hasil dari $b1 : $b2 = " .pembagian($b1, $b2);
?>
</body>
</html>