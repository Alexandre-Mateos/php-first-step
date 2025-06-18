<?php
$mot = 'Radar';
$motToLower = strtolower($mot);
$motArray = str_split ($motToLower);
$motReverse = '';

foreach ($motArray as $item){
    $motReverse = $item . $motReverse;
}

if ($motToLower === $motReverse){
    echo "C'est un palindrome";
}else{
    echo "Ce n'est pas un palindrome";
}

?>