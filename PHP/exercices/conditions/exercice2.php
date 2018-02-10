<?php
/**
* Completez ce code source pour que le script affiche
*
*   $chaine comporte plus de 10 caractères
*   OU
*   $chaine comporte moins de 10 caractères
*   OU
*   $chaine comporte exactement 10 caractères
*
*/
$chaine = $_GET['chaine'];

if(!isset($chaine)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost/formation/PHP/exercices/conditions/exercice2.php?chaine=ceci est un test</strong>");
}

/*
* Completez le code ici
*/

$taille = strlen($chaine);
if($taille < 10) {
    echo "la taille de la chaine est inferieur a 10 caracteres";
} elseif ($taille > 10) {
    echo "la taille de la chaine est superieur a 10 caracteres";
} else {
    echo "la taille de la chaine est egale a 10 caracteres";
}