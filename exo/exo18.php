<?php
$de1 = rand(1, 6);
$de2 = rand(1, 6);

$sum = $de1 + $de2;

echo "Dé 1 : $de1"."<br>"."Dé 2 : $de2"."<br>"."Somme : $sum"."<br>";

if ($sum === 7 || $sum === 11){
    echo "C'est gagné";
}else{
    echo "C'est perdu";
}
?>