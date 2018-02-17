<?PHP
/**
* Creer un script permettant de creer plusieurs rectangles de tailles differentes
* et placer y des ronds a l'interieur de couleur differentes.
* Creer un formulaire demandant le nombre de carre ainsi que le nombre de rond par rectangle.
*/

?>

<doctype html>
<html>
    <head>
        <style>
            #container {
                display:flex;
                flex-direction:row;
                flex-wrap:wrap;
            }
            .rectangle {
                border:1px solid black;
                position:relative; /* Positionner le rectangle en relative, afin de pouvoir positionner les cercle en absolu */
                top:0px;
                left:0px;                
                margin:50px;
            }
            .cercle {
                border-radius:50px;
                border:1px solid black;
                position:absolute; /* permet de placer les cercles par rapport au coin gauche du rectangle avec top left ...*/
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="nbRect">Nombre de rectangle</label>
            <input type="text" name="nbRect" id="nbRect" />
            
            <label for="nbRect">Nombre de round par round</label>
            <input type="text" name="nbRound" id="nbRound" />
            
            <input name="action" type="submit" value="Dessiner">
        </form>
        
        <?php
        // Containeur flex
        echo "<div id='container'>";
        
        /* On verifie :
        - Que le nombre de rectangle est un chiffre 
        - Que le nombre de rond est un chiffre
        - Que le nombre de rectangle est superieur a 0
        - Que le nombre de rond est superieur a 0
        */
        if(isset($_POST['action']) && $_POST['action']=="Dessiner") {            
            if(!is_numeric($_POST['nbRect']) || 
               !is_numeric($_POST['nbRound']) ||
               $_POST['nbRect'] <= 0 || 
               $_POST['nbRound'] <= 0) {
               
               echo "Le nombre de rond et de rectangle doit être un chiffre superieur à 0.";
               
            } else {
                // Definition d'un tableau de couleurs
                $couleurs = ['red','blue','brown','grey','black','violet','orange'];
                
                
                // on boucle sur le nombre de rectangle
                for($i=0;$i<$_POST["nbRect"];$i++) {
                    
                    
                    // On utilise rand pour choisir la taille et la hauteur des rectangles (entre 150 et 400px)
                    $tailleRectangle = rand(150,400);
                    $hauteurRectangle = rand (150,400);
                    
                    // On ouvre la div du rectangle
                    echo "<div class='rectangle' style='width:$tailleRectangle;height:$hauteurRectangle'>";
                    
                    // On boucle sur le nombre de round
                    for($j=0;$j<$_POST["nbRound"];$j++) {
                        
                        
                        // On utilise rand pour choisir la taille du rond (entre 10 et 50px)                    
                        $tailleRound = rand(10,50);
                        $hauteurRound = rand (10,50);
                        // On utilise rand pour choisir la position left et top du rond dans le rectangle
                        $positionLeft = rand(0,$tailleRectangle - $tailleRound);
                        $positionTop = rand(0,$hauteurRectangle - $hauteurRound);
                        
                        // On choisi une couleur (http://fr.php.net/count)
                        $couleur = $couleurs[rand(0,count($couleurs)-1)];
                        
                        // On dessine la div de cercle
                        echo "<div class='cercle' style='background-color:$couleur;top:$positionTop;left:$positionLeft;width:$tailleRound;height:$hauteurRound'></div>";
                    }
                    
                    // on ferme le rectangle
                    echo "</div>";
                }
            }
        }
        
        // On ferme le containeur
        echo "</div>";
        ?>
    </body>

<table>