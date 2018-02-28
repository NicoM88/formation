Le but de ce mini projet est de faire un jeu de scrabble automatique.
Un dictionnaire au format texte vous permettra de verifier que le mot existe, nous accepterons
que les mots de ce fichier (tans pis pour les autres).

- Créer un formulaire demandant le nombre de joueur et afficher un bouton "suivant"
- Une fois le boutton "suivant" cliqué, demander le nom des joueurs.
- Il faut que le nom des joueurs soit sauvegarder en session pour pouvoir les reutiliser après.
- Créer un bouton "Commencer le jeu"


- Une fois le boutton "commencer le jeu" validé créer une interface de scrabble :
    - Créer un bouton: "Tirer des lettres" qui tire 8 lettres au hazard dans l'alphabet
    - Afficher ces lettres sur la page HTML.
    - Créer un champs texte dans lequel vous allez entrer le mot et un bouton "jouer"
    - Lorsqu'on clique sur le bouton "jouer" il faut verifier que le mot existe dans le fichier texte 
    et afficher le nombre de point que le joueur vient de remporter ou un message s'il n'a pas de point.
    - Passer ensuite au joueur suivant et recommencer le procédé 5 fois par joueur.


- Une fois les 5 parties par joueurs jouées, afficher un recapitulatif du jeu :
  * Pour chaque joueur
     - Afficher les mots ainsi que le nombre de point pour chaque mot
     - Afficher le nombre de point total.
  * Classer les joueurs du premier au dernier.


- Enregistrer l'identifiant unique d'une partie, les scores, les noms de joueurs et la date dans un fichier texte au format CSV.
ex :
    124785478, "01/03/2018 09:30:00", "Martin", "245"
    124785478, "01/03/2018 09:30:00", "Lea", "127"

# Aide :

* Créer les interfaces

    - Datasource :
        - open();  // Ouvre une source de donnée
        - write(); // Ecrit une ligne dans la source de donnée
        - read();  // Récupere les informations de la source de donnée
        - close();
    

* Créer les classes

    - fileDataSource (permet de lire et ecrire dans un fichier)     
        - cette classe implemente DataSource
    - joueur (information sur le joueur)
    - partie (information sur les parties)
    - scrabble (permet de verifier les mots et derouler le jeu)


* Tableau des points par lettre:
    $points = [ "A"	=> 1, "B"	=> 3, "C"	=> 3, "D"	=> 2, "E"	=> 1, "F"	=> 4, "G"	=> 2, "H"	=> 4,"I"	=> 1, "J"	=> 8, "K"	=> 10, "L"	=> 1, "M"	=> 2, "N"	=> 1, "O"	=> 1, "P"	=> 3, "Q"	=> 8, "R"	=> 1, "S"	=> 1, "T"	=> 1, "U"	=> 1, "V"	=> 4, "W"	=> 10, "X"	=> 10, "Y" =>	10];
* Fonctions PHP utiles :
    - http://fr.php.net/manual/fr/function.include.php
    - http://fr.php.net/rand
    - http://fr.php.net/file_get_contents
    - http://fr.php.net/file_put_contents
    - http://fr.php.net/manual/fr/function.fopen.php
    - http://fr.php.net/manual/fr/function.fwrite.php
    - http://fr.php.net/manual/fr/function.fclose.php
    - http://fr.php.net/manual/fr/function.fread.php
    - http://php.net/manual/fr/function.fputcsv.php

Consignes :
    Il doit y avoir un fichier HTML par wireframe
    Vous devez créer un fichier PHP par classe
    Il doit y avoir le minimum de PHP dans vos fichiers HTML
    Vous devrez créer une feuille de style à part

