<?php
$grille = [['X','O','X'],[' ','X','X'],['O','O','X']];
$compteur = 0;

for ($i = 0 ; $i <= 2 ; $i++){
    if (
        ($grille[0][$i] === $grille[1][$i] && $grille[0][$i] === $grille[2][$i])
    ||  ($grille[$i][0] === $grille[$i][1] && $grille[$i][0] === $grille[$i][2])
    ||  ($grille[1][1] === $grille[0][$i] && $grille[1][1] === $grille[2][2-$i])
    ){
        $compteur += 1;
    }
}
if($compteur >= 1){
    echo "c'est gagné";
}else{
    echo "c'est perdu";
}

?>