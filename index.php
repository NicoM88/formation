<?php
include("libs/Training.php");
?>
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
        <style>
            h1,h2,h3,h4,h5 {margin:10px;}
            h1 {font-size:34px;}
            h2 {font-size:30px;}
            h3 {font-size:26px;}
            h4 {font-size:20px;}
            h5 {font-size:18px;}
            p {margin:10px;}
            
            .exercice {width:90px;display:inline-block;}
            .section {border:1px solid black;border-radius:5px;padding:10px;width:120px;display:inline-block;margin:10px;}            
            .sectionContainer {display:flex;flex-direction:row;}
            .panelCours {width:70%}
            .panelExercice {width:30%}
            .m10 {margin:10px}
        </style>
        <link rel="stylesheet" href="highlight.min.css" />
        <script src="highlight.min.js"></script>
        <script src="jquery.min.js"></script>
        <script type="text/javascript">
                   
            function AjaxPage(url) {
                $.ajax({
                  url: url,                  
                }).done(function(data) {
                  data= String(data).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
                  $('#panelCours').html("<pre><code class='php'>"+data+"</code></pre>");
                  $('pre code').each(function(i, block) {
                    hljs.highlightBlock(block);
                  });
                });         
            }
        </script        
    </head>
    <body>
        <span class="section"><a href="?categorie=ALGO">ALGORITHMIE</a></span>
        <span class="section"><a href="?categorie=PHP">PHP</a></span>
            <?php
            if(isset($_GET['categorie'])) {
                $cat=$_GET['categorie'];
                $training=new Training();
                $sections = $training->getDirInfos($cat);
                echo '<h1>Formation '.$cat.' 2018 - Nicolas BLAUDEZ</h1>';
                echo '<p>Slides <a href="'.$cat.'/formation.odp">version ODP</a> - <a href="'.$cat.'/formation.pdf">version PDF</a></p>';

                foreach($sections as $section) {
                    if(is_dir("$cat/".$section)  && $section != "slides"  && $section != "mini-projets") {
                        echo "<span class='section'><a href='?categorie=$cat&section=$section'>$section</a></span>";                    
                    }
                }            
                if(isset($_GET['section'])) {                
                    $section = $_GET['section'];
                    echo "<h4>$section</h4>";
                    echo "<div class='sectionContainer'>";
                    echo "<div id='panelCours' class='panelCours'>";
                    echo "<h5>cours</h5>";
                    include("$cat/".$section."/cours.html");
                    echo "</div>";
                    echo "<div class='panelExercice'>";
                    $exercices = $training->getExercices("$cat/".$section); 
                    
                    if(count($exercices)>0) {
                        echo "<h5>exercices</h5>";                    
                        foreach($exercices as $exercice) {
                            echo "<span class='exercice'>$exercice :</span> <a href='#' onclick='AjaxPage(\"$cat/".$section."/".$exercice."/enonce.html\")'>enoncé</a> - <a target='_blank' href='$cat/".$section."/".$exercice."/exercice.php' onclick='AjaxPage(\"$cat/".$section."/".$exercice."/exercice.php\")'>resultat exercice</a> -  <a href='#' onclick='AjaxPage(\"PHP/".$section."/".$exercice."/solution.html\")'>solution</a><br />";                                                    
                        }                    
                    }
                    echo "</div>";
                    echo "</div>";
                    
                }
            }
        ?>
    </body>
</html>    