<?php
$mot = 'abracadabra';
$lettre = 'a';
$index = [];
$response = "La lettre $lettre est présente aux positions : ";


$motToLower = strtolower($mot);

for ($i = 0 ; $i < strlen($motToLower) ; $i++){
    if (substr($motToLower, $i, 1) === $lettre){
        $index[] = $i;
    }
}

if (count($index) >= 1){
    $values = implode(", " , $index);
    echo $response . $values;
}else{
    echo "La lettre $lettre n'est pas présente";
}
?>