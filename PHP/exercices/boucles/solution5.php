<?php

/**
* Creer un script qui affiche les tables de multiplications des nombres de 1 a 5
*/

for($i = 1 ; $i < 5; $i++) {
    echo "<h1>Table du $i</h1>";
    for($j =1 ; $j <=10; $j++) {
        $resultat = $i * $j;
        echo "$i X $j = $resultat<br />";
    }
}