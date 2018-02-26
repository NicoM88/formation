<?php

/**
* Créer une fonction qui verifie qu'une variable existe dans $_POST, $_GET ou $_SESSION
* 
*/


function varExists($var) {
    if(isset($_POST[$var])) {
        return true;
    }elseif(isset($_SESSION[$var])) {
        return true;
    }elseif(isset($_GET[$var])) {
        return true;
    } else {
        return false;
    }
}