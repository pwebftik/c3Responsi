<!DOCTYPE html>
<html>

	<title></title>
<body>
<?php
// 
function PrintWord($anisa){  
  echo $anisa;  
 }  


function perkalian($x,$y)
{
   $total = $x * $y;
   return $total;
}

$var1 = 3;
$var2 = 4; 

$nilai_return = perkalian($var1,$var2);

echo "Nilai return adalah : " . $nilai_return;

function sum($x, $y) {
	$z = $x + $y;
	return $z;}
	echo "<br> 5 + 10 = " . sum(5,10)."<br>";
	echo "7 + 13 = " . sum(7,13)."<br>";
	echo "7 + 6 = " . sum(7,6);

function luas_kotak ($sisi){
$S = $sisi *$sisi;
return $S;
}echo "<br>luas kubus = ". luas_kotak(4);

function luas_balok($p, $l, $t){
$L=$p * $l * $t;

return $L;
} echo "<br> Luas balok = ". luas_balok(7,4 ,10);

function angka_kecil()
{
return array (0, 1, 2);
}
list ($nol, $satu, $dua) = angka_kecil();

function luas_segitiga($a, $t){
$L=1/2 * $a * $t;

return $L;
} echo "<br> Luas segitiga = ". luas_segitiga(4 ,10);

?>


</body>
</html>