<!DOCTYPE html>
<html>
</head>
<body bgcolor="old blue">
<div align="center">
<?php
	echo "JYBSHEET!";
	print(" ANTHEM!"."<br>");
	/* ini cara pertama */
	//ini cara kedua
	#ini cara ketiga
	/*$color="Habang <br>";
	echo $color;

	$int = 28;
	$string = "Noval Bayu";
	$float = 2.5;
	$boolean = true;
	//$array = [];

	// var_dump(is_float($float));
	// var_dump(is_float($int));

	echo "$string c3";
	echo "<br>";
	echo htmlspecialchars('<br>');
	echo '$string c3 <br>';

	echo strlen($string)."<br>";
	echo str_word_count($string)."<br>";
	echo strrev($string)."<br>";
	echo strpos($string, "Bayu");
	echo str_replace("Noval","noval",$string);
*/
	

	function tambah($a,$b){
		
		return $a + $b;

	}
	tambah(9,2);

////////////////////////////////////////////////
?></div>
<h1>Fungsi Void</h1>
<?php

	//buat 5 fungsi void
	function tulis($text='Noval Bayu')
	{
		echo "<br> Hello World! $text <br>";
	}
	function tulisnama($nama='Bayu'){
		echo "<br>Organized by $nama@admin.com<br>";

	}
	function namalengkap ($nama='Bayu'){
		$namalengkap = "Noval $nama Setiawan";
		echo "$namalengkap <br>";
	}
	function gantikata($namalengkap='Noval Bayu Setiawan'){

		echo str_replace("Noval","NOVAL",$namalengkap)."<br>";
	}
	function pelengkap(){
		$nama = 'Bayu';
		echo strrev($nama)."<br>";
	}
	tulis();
	tulisnama();
	namalengkap();
	gantikata();
	pelengkap();


	?>

<h1>Fungsi Return</h1>
	
	<?php

	//buat 4 fungsi return
	function sisabagi($x,$z){
		echo " <br> Perhitungan Sisa Bagi <br>";
		$hasil = $x % $z;
		return $hasil;

	}
	function perkalian($c,$d){
		echo "<br> Perkalian : <br>";
		$hasil = $c * $d;
		return $hasil;
	}
	function persegipanjang($p,$l){
		echo "<br>Luas persegi panjang = panjang x lebar <br>";
		$kelilingp = 2*($p+$l);
		return $kelilingp;
	}

	function pembagi($y,$n){
		echo "<br>Pembagian<br>";
		$hasil = $y / $n;
		return $hasil;

	}

	$hasil = sisabagi(5,2);
	echo $hasil;
	$hasil = perkalian(5,2);
	echo $hasil;
	$hasil = pembagi(5,2);
	echo $hasil;
	$kelilingp = persegipanjang(5,8);
	echo "$kelilingp";

?>
</body>
</html>