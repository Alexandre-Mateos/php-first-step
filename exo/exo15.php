<?php
$valeurs = [8, 3, 5, 1, 9, 69, 89, 0];
$minValue = $valeurs[0];
foreach ($valeurs as $num){
    if($num < $minValue){
        $minValue = $num;
    }
}
echo "Le plus petit nombre est : $minValue";
?>