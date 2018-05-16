<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Exercice 7 Partie 3 PHP</title>
  </head>
  <body>
    <?php
    // On initialise la variable $count à 1,
        $count = 1;
        while ($count <= 100) { //Tant que sa valeur est inférieure à 100,
          echo 'On tient le bon bout <br />'; //On affiche ce message
          $count+=15; //Puis on l'incrémente de 15 (ici, le $count+=15 est équivalent à $count = $count+15)
          var_dump($count); //Utilisé pour diagnostic
        }
        ?>
  </body>
</html>
