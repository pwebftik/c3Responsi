<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php 

// belum diedit karena ini data original, bukan yang diketik di praktikum.

echo "Hello world!";
echo "<br><br>";
//komen
#komen
/* komen
    multiple
    line*/
$x = 5 /* + 15 */ +5;
echo $x;
echo "<br><br>";
$color="red";
echo "My car is".$color."<br>";
echo "My house is".$COLOR."<br>";
echo "My boat is".$color."<br>";
echo "<br><br>";
// $txt = "Hello world!";
// $x = 5;
// $y = 10,5;

$txt = "W3School.org";
echo "saos: $txt<br>";
echo "saos: ".$txt."!";

echo "<br><br>";

$x = 5;
$y = 4;
echo $x+$y;
echo "<br><br>";
echo strlen("Hello world!"); //output 22
echo "<br><br>";
echo str_word_count("Hello world!");
echo "<br><br>";
echo strrev("Hello world!");
echo "<br><br>";
echo strpos("Hello world!","world");
echo "<br><br>";
echo str_replace("world","Miaw", "Hello world!");
echo "<br><br>";
function tulis(){
    echo "nulis ini..<br><br>";
}

tulis();

function namaKeluarga ($nama){
    echo "$nama Refsnes.<br>";
}

namaKeluarga("Jani");
namaKeluarga("Hege");
namaKeluarga("Stale");
namaKeluarga("Kai Jim");
namaKeluarga("Borge");

echo "<br>";

function familyName ($nama, $tahun){
    echo "$nama Refsnes, lahir tahun $tahun. <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");

echo "<br>";

function setHeight($minHeight = 50){
    echo "Tingginya adalah: $minHeight cm.<br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

echo "<br>";

function jumlah($x,$y){
    $z= $x+$y;
    return $z;
}

echo "5 + 10".jumlah(5,10)."<br>";
echo "7 + 13".jumlah(7,13)."<br>";
echo "2 + 4".jumlah(2,4)."<br>";

echo "<br>";

 ?>

</body>
</html>