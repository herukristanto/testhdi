<?php

function generatePattern($val)
{
    $atas= $val / 2;
    $bawah = $atas;
    
    for ($a=$atas; $a > 0; $a--) {
        for ($i=1; $i <= $a; $i++) {
            echo " &nbsp";
        }
        for ($a1=$atas; $a1 >= $a; $a1--) {
            echo ($a % 2 == 0) ? "*" : "o";
        }
        if ($a <= 1) {
            
        } else {
            echo"<br>";
        }
    }

    for ($a=1; $a <= $bawah; $a++) {
        if ($a != 1) {
            for ($z=0; $z < $atas + 1 ; $z++) { 
                echo " &nbsp";
            }
        }
        for($c=$bawah; $c>=$a; $c-=1){
            echo ($a % 2 == 0) ? "*" : "o";
        }
        echo "<br/>";
    }
}

generatePattern(15);

?>