<?php
$a = 14;
$b = 22;
$c = 6;

if ($a > $b && $a > $c ){
    echo 'le plus grand nombre est ' . $a;
}elseif ($b > $a && $b > $c){
    echo 'le plus grand nombre est ' . $b;
}else {
    echo 'le plus grand nombre est ' . $c;
}
?>