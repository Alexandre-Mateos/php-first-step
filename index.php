<?php

// pour déclarer une variable le symbol $ est indispensable. Et le point virgule est indispensable !!!
$myVar = 'Salut les gens';
// echo sert à afficher le conyenu entre parenthèse sur la page
echo $myVar;

// pour écrire un paragraphe en html contenant $myVar
echo '<p>' . $myVar . '<p>';

// pour faire un tableau
$tableau = [12, 34, 56];

// pour débuguer (équivalent de console?log en JS). Il n'est pas possible de faire echo sur un tableau
var_dump($tableau);

// boucle for pour afficher tout les éléments d'un tableau
for($i = 0 ; $i < count($tableau) ; $i++){
    echo $tableau[$i] . ' ';
}

// boucle foreach
foreach($tableau as $item){
    echo $item . ' ';
}


?>