<?php
$nombres = [10, 42, 5, 8, 42, 19];
$recherche = 5;
$indices = [];
foreach (array_keys($nombres, $recherche) as $index){
    $indices [] = $index;
}

if (count($indices) >= 1){
    foreach ($indices as $key){
        echo "le nombre $recherche est présent à l'indice $key"."<br>";
    }
}else{
    echo "Ce nombre n'est pas présent";
}
?>