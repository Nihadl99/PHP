<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>PHP</title>
</head>
<body>
    <?php 
         // echo permet d'afficher du texte 
          echo 'salut les gens <br>';
          echo 'salut PHP <br>';
         // on peut utiliser les doubles et / ou échapper les quotes avec un /

          echo "J'affiche un \"texte\"";

          echo '<h2>Les variables</h2>' ;
         //En PHP, on peut déclarer des variables
          $age = 30; // un integrer ( entier)
          $city = 'douai'; // un string ( une chaine de caractères)
          $price = 2.99; //un float (Un nombre à virgules)
          $monkeyeatbanana = true; //un bolean (booléen vrai ou faux)
        
         //la concaténation , c'est mettre bout à bout plusieurs chaines
         // Des caractères et / ou variables.
          echo 'j\'ai '.$age.' ans et je vais à '.$city.'.<br/>';
          echo "la variable price contient $price. <br/>"



    ?>
</body>
</html>