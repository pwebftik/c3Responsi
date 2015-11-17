<!DOCTYPE html>
<html>
<head>
    <title>Postest 5</title>
</head>
<body>
    <?php 
function nl(){
    echo "<br>";
}
    echo "Tugas Membuat 5 Fungsi<br>";

function tanggal()
{ 
    echo "<br>Today is ".date("d M Y")." <br>";
    echo "Time: ".date("h:i")." <br>";
}
tanggal();


function buatWajik($n){
        for ($i=1; $i <=$n; $i++) { 
            for ($j=$n; $j >= $i; $j--) { 
                echo "=";
            }
            for ($j=$i; $j>=1; $j--) { 
                echo "+";
            }
            for ($j=2; $j <= $i; $j++) { 
             echo "+";
         }
         for ($j=$n; $j >= $i; $j--) { 
            echo "=";
        }
        echo "<br>";
    }
    for ($i=2; $i <=$n; $i++) { 
        for ($j=$i; $j>=1; $j--) { 
            echo "=";
        }
        for ($j=$n; $j >= $i; $j--) { 
            echo "+";
        }
        for ($j=$n-1; $j >= $i; $j--) { 
            echo "+";
        }
        for ($j=1; $j <= $i; $j++) { 
         echo "=";
     }
     echo "<br>";
 }
}

buatWajik(5);    

nl();

function sisimiring($a,$b)
{
    $c = sqrt($a*$a+$b*$b);
    return $c;
}

echo "Sisi miring adalah ".sisimiring(12,16).".<br>";

nl();

function diskon($h){
    if ($h<100000) {
        return $h*0.1;
    }
    else {
        return $h*0.2;
    }
}

echo "Diskon= ".diskon(120000)."<br>";


function pajak($h){
    if ($h<100000) {
        return $h+$h*0.1;
    }
    else {
        return $h+$h*0.2;
    }
}

echo "Ditambah pajak menjadi= ".pajak(120000)."<br>";

function faktorial($d){
    $fak=1;
    for ($i=1; $i <=$d ; $i++) { 
        $fak=$fak*$i;
    }
    return $fak;
}

echo "faktorial 6 adalah ".faktorial(6);

?>

</body>
</html>