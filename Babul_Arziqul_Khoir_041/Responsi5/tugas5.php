
<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 5</title>
</head>
<body>
<?php
function tanggal()
{
    echo "<br>Today is ".date("d M Y")." <br>";
    echo "Time: ".date("h:i")." <br>";
}
tanggal();
function terbalik($string){
    echo "$string => ".strrev($string)."<br>";
}
terbalik("FTIK");
function besar($string){
    echo "$string => ".strtoupper($string)."<br>";
}
besar("besar");

function depan($string){
    echo "$string => ".ucwords($string)."<br>";
}
depan("ftik");
function slas($string,$string){
    echo "$string => ".addcslashes($string,$string)."<br>";
}
slas("FTIK","unmul");

?>
</body>
</html>
</body>
</html>