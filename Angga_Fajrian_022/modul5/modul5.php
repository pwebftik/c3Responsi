<!DOCTYPE html>
<html>
<head>
	<title>Modul 5 responsi Web</title>
</head>
<body>
<h1> Fungsi Void </h1>

<?php
	function name($text="Angga"){
		echo "Hai $text <br>";
	}
	function nim($text="1415015022"){
		echo "NIM kamu $text <br>";
	}
	name();
	nim();
?>

<br>
<h2> Aritmatika </h2>
<?php
	function tambah($a,$b){
		echo"<br>";
		$hasil = $a + $b;
		return $hasil;
	}
	function kurang($a,$b){
		echo"<br>";
		$hasil = $a - $b;
		return $hasil;
	}
	function kali($a,$b){
		echo"<br>";
		$hasil = $a * $b;
		return $hasil;
	}
	function bagi($a,$b){
		echo"<br>";
		$hasil = $a / $b;
		return $hasil;
	} 
	$hasil = tambah(4,4);
	echo $hasil;
	$hasil = kurang(99,9);
	echo $hasil;
	$hasil = kali(2,10);
	echo $hasil;
	$hasil = bagi(9,3);
	echo $hasil;
	?>
</body>
</html>