<?PHP
/**
* Creer un echiquier de 8 cases sur 8 avec une case sur deux colorés en noir
*/
?>

<doctype html>
<html>
    <head>
        <style>
        table tr:nth-child(odd) td:nth-child(even) {
            background-color:black;
        }
        table tr:nth-child(even) td:nth-child(odd) {
            background-color:black;
        }
        td {
            height:50px;
            width:50px;
            border:1px solid black;
        }
        </style>
    </head>
    <body>
        <table>
            <?php
                for($i=0;$i<8;$i++) {
                    echo "<tr>";
                        for($j=0;$j<8;$j++) {
                            echo "<td></td>";
                        }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>

<table>