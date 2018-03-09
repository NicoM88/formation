<?php
/**
 * Created by PhpStorm.
 * User: cci
 * Date: 07/03/18
 * Time: 10:02
 */
namespace Ecommerce;

include ("Produit.php");
include ("Panier.php");
include ("Magasin.php");

use Ecommerce\panier;
use Ecommerce\magasin;
use Ecommerce\Produit as product;
$Produit = new product();
var_dump(get_class($Produit));



//on instencie tous les objets dans init :
// dans la class produit , on invente de nouveaux produits et on prend toutes les variables de cette class
//
// produits: // on invente des produits: et on determine des valeurs aux variables
$ordinateur = new Produit();
$ordinateur->setPrix(500);// float
$ordinateur->setReference("ord1"); // string chaine de caractere
$ordinateur->setDescription("nouvelle generation");
$ordinateur->setPhoto("ph1");
$ordinateur->setCategorie("electro");

$tablette = new Produit();
$tablette->setPrix(300);
$tablette->setReference("tab1");
$tablette->setDescription("nouvel ecran");
$tablette->setPhoto("ph2");
$tablette->setCategorie("electro");





?>
