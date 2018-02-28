<?php session_start();?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="Solution exercice 10">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
    </head>
    <body>
        <?php
            // On met en session le contenu du champ caché "step";
            if(isset($_POST['step'])) {
                $_SESSION['step'] = $_POST['step'];
            // Sinon on met $_SESSION['step'] à null
            } else {
                $_SESSION['step'] = null;
            }
            // Suivant le contenu du champ caché "step" on affiche tel ou tel formulaire
            // ou récapitulatif
            switch($_SESSION['step']) {
                // Deuxieme etape
                case "2":    
                    // On met toutes les variables envoyé par le formulaire (dans $_POST) en session (dans $_SESSION)
                    foreach($_POST as $key=>$value) {
                        $_SESSION[$key]=$value;
                    }
                    // On definie la variable couleur en fonction du sexe posté dans le formulaire
                    if($_SESSION['sexe']=="masculin") {
                        $couleur="CornflowerBlue ";
                    } else {
                        $couleur="pink";
                    }
                    echo "<div style='background-color:$couleur'>";
                    echo "Nom :".$_SESSION['nom']."<br />";
                    echo "Prénom :".$_SESSION['prenom']."<br />";
                    echo "Sexe :".$_SESSION['sexe']."<br />";
                    echo "Nombre de match :".$_SESSION['nbMatch']."<br />";
                    echo "</div>";
                    // On affiche les champs textes pour recolter le nombre de point de chaque match
                    echo "<form action='solution10.php' method='post'>";
                    for($i=1;$i<=$_SESSION['nbMatch'];$i++) {
                        echo "Point du match $i : <input type='text' name='points[$i]'><br />";
                    }                    
                    // Creation du champ caché avec la valeur de "step";
                    echo "<input type='hidden' name='step' value='3'>";
                    echo "<input type='submit' name='action' value='Suivant'>";
                    echo '</form>';
                    break;
                // Troisieme etape
                case "3":
                    // On met toutes les variables envoyé par le formulaire (dans $_POST) en session (dans $_SESSION)
                    foreach($_POST as $key=>$value) {
                        $_SESSION[$key]=$value;
                    }
                    // On definie la variable couleur en fonction du sexe posté dans le formulaire
                    if($_SESSION['sexe']=="masculin") {
                        $couleur="CornflowerBlue ";
                    } else {
                        $couleur="pink";
                    }
                    echo "<div style='background-color:$couleur'>";
                    echo "Nom :".$_SESSION['nom']."<br />";
                    echo "Prénom :".$_SESSION['prenom']."<br />";
                    echo "Sexe :".$_SESSION['sexe']."<br />";
                    echo "Nombre de match :".$_SESSION['nbMatch']."<br />";
                    echo "</div>";
                    // On affiche les champs textes pour recolter le nombre de point de chaque match
                    echo "<h2> Points marqués durant les matchs</h2>";
                    $total = 0; // On initialise le total des points a 0
                    for($i=1;$i<=$_SESSION['nbMatch'];$i++) {
                        // On ajoute le nombre de point du match $i au total
                        $total = $total + $_SESSION['points'][$i];
                        // On affiche le nombre de point du match $i
                        echo "Point du match $i : ".$_SESSION['points'][$i]."<br />";
                    }                   
                    echo "<br />";
                    // On affiche le nombre de point total
                    echo "Nombre total de point :".$total."<br />";
                    break;
                // step n'est pas renseigné - action par default
                default:
                    echo "<h1>Remplissez ce formulaire</h1>";
                    echo "<form action='solution10.php' method='post'>";
                    echo "<label for='nom'>Nom:</label><input type='text' name='nom' /><br />";
                    echo "<label for='prenom'>Prénom:</label><input type='text' name='prenom' /><br />";
                    echo "<label for='sexe'>Sexe:</label>
                            <select name='sexe'>
                                <option value='masculin'>Masculin</option>
                                <option value='feminin'>Feminin</option>
                            </select>
                            <br />";
                    echo "<label for='nbMatch'>Nombre de match:</label><input type='number' name='nbMatch' /><br />";
                    echo "<input type='hidden' name='step' value='2'>";
                    echo "<input type='submit' name='action' value='Suivant'>";       
                    break;
            }        
        ?>
    </body>
</html>