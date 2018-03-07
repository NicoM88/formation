<?php
session_start();
?>
<!--/**-->
<!-- * Jeux de sorciers et guerriers-->
<!-- * -->
<!-- * Le but du jeu est de créer des "personnages" qui vont se battre-->
<!-- * Ces "personnages" sont des "guerriers" et des "sorciers"-->
<!-- * -->
<!-- * Le "sorcier" peut "ensorceller" un autre "personnage"-->
<!-- * Lors d'une attaque de sorcier l'autre "personnage" perd 10 points de vie-->
<!-- * -->
<!-- * Le "guerrier" peut "attaquer" un autre "personnage"-->
<!-- * Lors d'une attaque de guerrier l'autre "personnage" perd 15 points de vie-->
<!-- * -->
<!-- * -->
<!-- * Faire un formulaire qui demande le nombre de sorciers et le nombre de guerriers-->
<!-- * Demander le nombre de point de vie et le  nom de chaque personnage-->
<!-- * -->
<!-- * -->
<!-- * Créer autant de personnage qu'indiqué dans le formulaire, parametrer leurs noms et point de vie-->
<!-- * et faite les se battre.-->
<!-- * -->
<!-- * Le jeu s'arrete quand il ne reste plus qu'un personnage.-->
<!-- * -->
<!-- * */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeu Guerriers Sorciers</title>
    <link rel="stylesheet" href="exercice2poo.css">

</head>
<body>

<?php
// je crée le formulaire:

echo"<form method='post' name='jeu'  action=''>
        Nombre de Sorciers <input type='number'  name='Nombre_de_Sorciers'>
        Nombre de Guerriers <input type='number' name='Nombre_de_Guerriers'>
        <h1><input type='submit' name='Action' value='Envoyer1'></input></h1>
        </form>";

// je récupère les données du bouton envoyer1
if (isset($_POST['Action'])){
    $_SESSION['Nombre_de_Sorciers'] = $_POST['Nombre_de_Sorciers'];
    $_SESSION['Nombre_de_Guerriers'] = $_POST['Nombre_de_Guerriers'];

    // je crée ma boucle en fonction du nombre de sorciers
    for ($i = 0; $i < $_SESSION['Nombre_de_Sorciers']; $i ++){
        echo "Nom du Sorcier :"."<input type='text' name='Score[]'>"."<br>";
        echo "Nombre de points de vie :"."<input type='text' name='Score[]'>"."<br>";
    }
    // je crée ma boucle en fonction du nombre de guerrierS
    for ($n = 0; $n < $_SESSION['Nombre_de_Guerriers']; $n ++){
        echo "Nom du Guerrier :"."<input type='text' name='Score[]'>"."<br>";
        echo "Nombre de points de vie :"."<input type='text' name='Score[]'>"."<br>";
    }
    echo "<br><input type='submit' name='Action2' value='Envoyer2'></input></br>";

}

 // je récupère les données du bouton envoyer2 avec if isset et ensuite if pour dire fait ça ...
if (isset($_POST['Action2'])){
    if ($_POST['Nom_du_Sorcier'.'Nombre_de_points_de_vie']==""){
    echo "Nom du Sorcier"." "."Nombre de points de vie";
    }
        //echo "Nom du Guerrier"."Nombre de points de vie";
}

?>

<?php
// je determine une class Personnage qui va contenir l'ensemble des variables et fonctions
Class Personnage {
    // je déclare mes variables communes a tous les personnages
    public $nom;
    public $points_de_vie;
    public $attaque;

    //on determine une fonction constructeur
    public function __construct($nom,$points_de_vie,$attaque){
        $this ->nom = $nom;
        $this ->points_de_vie =  $points_de_vie;
        $this ->attaque = $attaque;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function getPointsDeVie()
    {
        return $this->points_de_vie;
    }

    public function getAttaque()
    {
        return $this->attaque;
    }

    //je definis ma methode fight
    public function fight($personnage2){
        $personnage2->points_de_vie = $personnage2->points_de_vie - $this->attaque;
    }

}



// on determine les 2 class qui vont s'étendre à la class " Personnage "
Class Sorcier extends Personnage {
    public $attaquevalue = 10;

}
Class Guerrier extends Personnage {
    public $attaquevalue = 15;
}
// je crée des personnages autant que définis dans le formulaire
//

$tableauPersonnage = ['Guerrier'=>'meme','momo','Sorcier'=>'toto','tintin'];
var_dump($tableauPersonnage);
// //ma boucle foreach as pour lire dans mon tableau
//foreach ($tableauPersonnage as $value){
//    if ($i=1; $i<2; $i++){
//
//    }
//    echo $i;
//}




//// je donne les éléments de ma construct function soit nom, points de vie , attaque
//$obj1=new Sorcier("","","");
//$obj2=new Guerrier("","","");
//
//echo $obj1->getNom()." ".$obj1->getPointsDeVie()." ".$obj1->getAttaque()." ";
//echo $obj2->getNom()." ".$obj2->getPointsDeVie()." ".$obj2->getAttaque();
//
//// je determine ma boucle tant qu'il y a des guerriers de 0 à 4 soit 4 personnages
//foreach ( as ){
//    //j'appelle mon tableau et je demande un personnage de facon aléatoire
//    // code a executer
//    $tableauPersonnage[] = new Guerrier("","","");
//}
//
//// je determine ma boucle tant qu'il y a des sorciers
//for ($i=0; $i<4; $i++){
//
//}

// je parcours mon tableau avec foreach as
//foreach ($tableauPersonnage as $key){
//    if ($key ){
//
//    }
//


?>


</body>
</html>

