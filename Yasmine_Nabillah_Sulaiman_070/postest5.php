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

function tanggal()
{
    echo "<br>Today is ".date("d M Y")." <br>";
    echo "Time: ".date("h:i")." <br>";
}

tanggal();

nl();

function balik($string){
    echo "$string => ".strrev($string)."<br>";
}

balik("kucing");

nl();

function sisimiring($a,$b)
{
    $c = sqrt($a*$a+$b*$b);
    echo "Sisi miring dari $a dan $b adalah $c.<br>";
}

sisimiring(12,16);

nl();

function vBola($r){
    $v=pow($r, 3)*(22/7)*(4/3);
    echo "Volume bola dengan jari-jari $r adalah $v.";
}

vBola(7);

?>

</body>
</html>