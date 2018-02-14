<?php

/**
* Afficher le nombre de 1 à 10 avec :
* for
* do
* while
*/

echo "<h1>Avec une boucle for</h1>";
for($i=1;$i<=10;$i++) {
    echo $i."<br />";
}
?>

<hr />

<?php
echo "<h1>Avec une boucle while</h1>";
$i = 0;
while($i<=10) {
    echo $i."<br />";
    $i++;
}
?>

<hr />

<?php
echo "<h1>Avec une boucle do</h1>";
$i = 0;
do{
    echo $i."<br />";
    $i++;
}while($i<=10)
?>