<?php
/**
 * Created by PhpStorm.
 * User: cci
 * Date: 07/03/18
 * Time: 09:41
 */
namespace Ecommerce;
// je determine une class Panier qui va contenir l'ensemble des variables et fonctions
class Panier
{
    // je déclare mes variables
    public $liste_produit;
    public $total;

    // fonctions

    public function getRecapituler()
    {
        return $this->liste_produit;
    }

    public function ajouterProduit()
    {

    }

    public function supprimerProduit()
    {

    }

    public function calculTotal()
    {

    }

}