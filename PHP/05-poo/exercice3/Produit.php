<?php
/**
 * Created by PhpStorm.
 * User: cci
 * Date: 07/03/18
 * Time: 09:40
 */
namespace Ecommerce;
// je determine une class Produit qui va contenir l'ensemble des variables et fonctions
class Produit
{
    // je déclare mes variables
    public $prix;
    public $reference;
    public $description;
    public $photo;
    public $categorie;

    // fonctions get et set
    public function getPrix() // get = prend ( une variable ) je récupère la valeur
    {
        return $this->prix;
    }

    public function setPrix($nouveau_prix) // set = donne ( une valeur ) je donne la valeur
    {
        $this->prix = $nouveau_prix;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($nouvelle_reference)
    {
        $this->reference = $nouvelle_reference;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($nouvelle_description)
    {
        $this->description = $nouvelle_description;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($nouvelle_photo)
    {
        $this->photo = $nouvelle_photo;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($nouvelle_categorie)
    {
        $this->categorie = $nouvelle_categorie;
    }
}