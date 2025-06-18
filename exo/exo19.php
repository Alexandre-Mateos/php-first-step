<?php
$a = 12;
$b = 4;
$operations = ['+', '-', '*', '/'];

foreach ($operations as $operator){
    switch($operator){
        case $operator === '+';
            echo "$a $operator $b = ".$a*$b."<br>";
                break;
        case $operator === '-';
            echo "$a $operator $b = ".$a-$b."<br>";
            break;
        case $operator === '*';
            echo "$a $operator $b = ".$a*$b."<br>";
            break;
        case $operator === '/';
            echo "$a $operator $b = ".$a/$b."<br>";
            break;
    }
}
?>