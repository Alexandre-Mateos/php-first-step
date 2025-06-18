<?php
$limite = 50;
$multipleDe = 7;
$total = 0;

for ($i = 1 ; $i <= $limite ; $i ++){
    if ($i % $multipleDe === 0){
        $total += 1;
    }
}

echo "Il y a $total multiple de $multipleDe entre 1 et $limite";
?>