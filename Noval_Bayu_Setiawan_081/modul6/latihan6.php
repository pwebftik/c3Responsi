<!DOCTYPE html>
<!-- Credit By NBS/JYBSHEET-->
<html>
<head>
	<title></title>
</head>
<body bgcolor="old blue">
	<?php
	//if, else dan elseif...
		$t = date("H");
		if ($t < "10"){
			echo "Good Morning! ";

		}

		elseif ($t  < "20"){
			echo "Have a good day! ";
		} 

		else {
			echo "Have a good night! ";
		}

		//Switch
		$favcolor = "Green";
		switch ($favcolor) {
			case "red":
				echo "Warna Favorit kamu Merah";
				break;
			case "Green":
				echo "Warna Favorit kamu Hijau";
				break;
			default:
				echo "Warna favorit kamu bukan Merah atau Hijau";
				break;
		}

		//Perulangan
		$x = 1;
		echo "<br> INI PAKAI WHILE <br>";
		while ($x <= 5) {
			echo "The number is : $x <br>";
			$x++;
		}
		echo "<br> INI PAKAI DO-WHILE <br>";
		do {
			echo "The Number is : $x <br>";
			$x--;
		} while ($x>= 5);
		echo "<br> INI PAKAI FOR <br>";
		for ($x=0; $x <=10 ; $x++) { 
			echo "The Number is : $x <br>";
		}
		echo "<br> INI PAKAI FOREACH <br>";
		$warna = array("Merah","Kuning","Hijau");
		foreach ($warna as $value) {
			echo "$value <br>";
		}
		echo "<br>";
		/////////////////////////
		$x = 10;
		$y = 3;
		echo $x."<br>";
		echo $x+$y."<br>";
		echo $x-$y."<br>";
		echo $x*$y."<br>";
		echo $x/$y."<br>";
		echo $x%$y."<br>";
		echo $x**$y."<br>";
		var_dump($x==$y); echo "<br>";
		var_dump($x===$y); echo "<br>";
		var_dump($x!=$y); echo "<br>";
		var_dump($x<>$y); echo "<br>";
		var_dump($x>$y); echo "<br>";
		var_dump($x<$y); echo "<br>";
		var_dump($x>=$y); echo "<br>";
		var_dump($x<=$y); echo "<br>";
		var_dump($x!==$y); echo "<br>";
		echo $x++."<br>";
		echo $x."<br>";
		echo ++$x."<br>";
		echo $x."<br>";
		echo $x--."<br>";
		echo $x."<br>";
		echo --$x."<br>";
		echo $x."<br>";
		var_dump($x==10 xor $y==3);
		echo "<br>";
		$text = "Hello";
		$text.= "World";
		$new = $text." and program";
		echo "$text <br>";
		echo "$new <br>";

		$array_orang = ["Noval","Bayu","Setiawan"];
		foreach ($array_orang as $orang) {
			echo "Ih... $orang ganteng beudts <br>";
		}

		$array_orang = array("Noval","Bayu","Setiawan");
		foreach ($array_orang as $orang) {
			echo "Ih... $orang ganteng beudts <br>";
		}
	
		foreach (["Noval","Bayu","Setiawan"] as $orang) {
			echo "Ih... $orang ganteng beudts <br>";
		}
		?>
</body>
</html>