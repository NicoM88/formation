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
if(is_null($chaine)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8080/php/conditions/exercice_2.php?chaine=ceci est un test</strong>");
}
/*
* Completez le code ici
*
* AIDE :
* La fonction permettant de connaitre le nombre de caractère d'une chaine est strlen()
* http://fr.php.net/strlen
*/
