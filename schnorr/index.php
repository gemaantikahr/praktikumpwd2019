<?php 

function carinilai($base, $exponent, $modulus){
    $result = 1;
    while($exponent > 0){
        if($exponent % 2 == 1){
            $result = fmod(($result * $base),$modulus);
        }
        $exponent = $exponent >> 1;
        $base = fmod(($base * $base ),$modulus);
    }
    return $result;
}

$a =0;
$b =1;

$b = $b || 100;
echo $b;


?>