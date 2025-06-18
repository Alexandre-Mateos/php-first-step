<?php
// On met la phrase en minuscule et on la transforme en tableau;
$phrase = 'Bonjour tout le monde';
$phraseToLower = strtolower($phrase);
$arrayPhrase = str_split($phraseToLower);

// mon tableau de voyelles de références;
$voyellesArray = ['a', 'e', 'i', 'o', 'u', 'y'];
$nbVoyelles = 0;

//vérifie pour chaque string de mon tableau si elle est présente dans le tableau voyelle;
foreach ($arrayPhrase as $item) {
    if (in_array($item, $voyellesArray)) {
        $nbVoyelles += 1;
    }
}
echo 'il y a '.$nbVoyelles.' voyelles';

?>