<!DOCTYPE html>
<html>
<head>
	<title>Modul 5 Responsi PHP</title>
</head>
<body>
<h2>Fungsi Void Text</h2>
<br>
<?php
	function name($text="Aslam"){
		echo "Haloo $text <br>";
	}
	function nim($no="1415015019"){
		echo "NIM anda $no <br>";
	}
	name();
	nim();
	
?>
<br>
<h2>Fungsi Aritmatika</h2>
<?php
	function tambah($a,$b){
		echo "<br>";
		$hasil = $a + $b;
		return $hasil;
	}
	function kurang($a,$b){
		echo "<br>";
		$hasil = $a - $b;
		return $hasil;
	}
	function kali($a,$b){
		echo "<br>";
		$hasil = $a * $b;
		return $hasil;
	}
	function bagi($a,$b){
		echo "<br>";
		$hasil = $a / $b;
		return $hasil;
	}
	$hasil = tambah(2,3);
	echo $hasil;
	$hasil = kurang(10,2);
	echo $hasil;
	$hasil = kali(7,6);
	echo $hasil;
	$hasil = bagi(20,4);
	echo $hasil;
?>
</body>
</html>