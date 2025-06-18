<?php
$mystere = [38, 72, 15];

foreach ($mystere as $item) {
    $randomNum = rand(1, 100);
    $compteur = 1;
    while ($item !== $randomNum) {
        $randomNum = rand(1, 100);
        $compteur += 1;
    }
    echo "Nombre mystère $item trouvé en $compteur coups".'<br>';
}
?>