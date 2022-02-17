<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table carré</title>
    <link rel="stylesheet" href="exercice4.css"> 
</head>
<body>
    <div class="carre"> <!-- F-Ici , on affiche la légende du haut de 0 à 10 avec X en premier -->
    <div class="flex">
        <div class="resultat legend-haut legend">X</div>
        <?php for ($i = 0 ; $i <= 10 ; $i++){ 
            if ($i % 2 != 0){
                $class = 'light-grey';
            }
            else{
                $class ='';
            }
            //L'opérateur ternaire est une manière simplifier d'écrire un if et else 
            $class = ($i % 2 != 0) ? 'light-grey' : '';
        ?>
            <div class="resultat legend-haut <?php echo $class ; ?>"><?php echo $i ?></div>
        <?php } ?>
    </div>
<!-- A-En premier , on a simplement affiché le carré avec les resultats des multiplications -->
<!-- B-Pour faire ça , on à deux boucles ($tables qui représente les lignes et $multiple represente les colonnes (on nomme comme on veut ))-->
    <?php for ($table = 0 ; $table <= 10 ; $table++){ ?>
        <div class="flex">
            <?php
            if ($table % 2 != 0){
                $class = 'light-grey';
            }
            else{
                $class ='';
            }
            ?>
            <!-- E - ici on affiche la légende = ligne vertical avant les 0 ( chaque lignes de 0 à 10)-->
            <div class="resultat legend"><?php echo $table; ?></div>
            <!-- C- la 2eme colonne permet d'afficher chaque colonne ($multiple)-->
            <?php for ($multiple = 0 ; $multiple <= 10 ; $multiple++){ 
                // G- Si on arrive sur un nombre carré ( 4 x 4 = 16 par exemple) , on ajoutera
                // la classe dark-grey sur la case du résultat ( fond gris foncé).
                if ($table == $multiple){
                $class = 'dark-grey';
            //H - Pour les cases en gris clair , on doit déterminer si $table et $multiple sont pairs
            //ou impairs en même temps 
            } 
            else if ($multiple % 2 == 0 && $table % 2 == 0){
              $class = 'light-grey';
            }
            elseif($multiple % 2 != 0 && $table %2 !=0){
                $class = 'light-grey';
            }
            else{
                $class ='';
            }
            ?>

                <div class="resultat <?php echo $class; ?>">
                <!-- D- on affiche le résultat entre chaque ligne et chaque colonne -->

                 <?php echo $table * $multiple; ?>

                </div>

            <?php } ?>
        </div>

    <?php } ?>
</body>
</html>

