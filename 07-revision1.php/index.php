<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Révisions</title>

    <style>
        .bouton {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }

        .vert {
            background-color: lightgreen;
        }

        .rouge {
            background-color: red;
        }

        table {
            border: 1px solid #000;
            width: 300px;
        }

        .pair {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <h1>Conditions</h1>

    <?php
        $heure = $_GET['heure'] ?? 13;

        echo "A $heure heures, ";

        if ($heure >= 5 && $heure < 12) {
            echo 'c\'est le matin.';
        } elseif ($heure >= 12 && $heure < 18) {
            echo 'c\'est l\'après midi.';
        } elseif ($heure >= 18 && $heure < 21) {
            echo 'c\'est le soir.';
        } else {
            echo 'c\'est la nuit.';
        }
    ?>

    <form action="">
        <select name="heure">
            <?php for ($i = 0; $i < 24; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select>
        <button>Changer</button>
    </form>

    <?php
        $isLogged = $_GET['logged'] ?? false;
        // 0 == false, 1 == true
    ?>

    <?php if (!$isLogged) { ?>
    <a class="bouton vert" href="index.php?logged=1">Connexion</a>
    <?php } else { ?>
    <a class="bouton rouge" href="index.php?logged=0">Déconnexion</a>
    <?php } ?>

    <h1>Boucles</h1>

    <?php
        echo '<h2>for</h2>';
        for ($i = 62000; $i <= 62100; $i++) {
            echo $i.' - ';
        }

        echo '<h2>while</h2>';
        $i = 62100;
        while ($i <= 62200) {
            echo $i++.' - ';
        }

        echo '<h2>foreach</h2>';
        foreach (range(62200, 62300) as $zip) {
            echo $zip.' - ';
        }

        echo '<br><br>';

        $nombreAtrouver = 435;
        $nombreEssais = 0;
        $dejaTeste =[];
        echo rand(0,1000);
        
        
        do{
            
            $test =rand(0,1000);

            //Si le nombre est déjà sorti , on l'ajoute au tableau et on
            //l'incrémante le nombre d'essais
            if(in_array ($test,$dejaTeste)){
                $dejaTeste[] = $test; //On ajoute le nombre donné dans le tableau 
                $nombreessais++;
            }
            

        }
        while($nombreATrouver != $test); //while = tant que 
       
            echo 'php à trouvé le nombre en '.$nombreessais.' fois ';

        
    ?>

    <h1>Tableaux</h1>

    <?php
        $vehicules = [
            ['marque' => 'Renault', 'modele' => 'Megane', 'prix' => 5000],
            ['marque' => 'BMW', 'modele' => 'X2', 'prix' => 17000],
            ['marque' => 'Alfa Roméo', 'modele' => '147', 'prix' => 6500],
            ['marque' => 'Peugeot', 'modele' => '308', 'prix' => 12000],
        ];
    ?>

    <table>
        <thead> <!-- Légende du tableau -->
            <th>Marque</th>
            <th>Modèle</th>
            <th>Prix</th>
        </thead>

        <?php foreach ($vehicules as $index => $vehicule) { ?>
        <tr class="<?php echo ($index % 2 == 0) ? 'pair' : ''; ?>">
            <td><?php echo $vehicule['marque']; ?></td>
            <td><?php echo $vehicule['modele']; ?></td>
            <td><?php echo number_format($vehicule['prix'], 2, ',', ' '); ?> €</td>
        </tr>
        <?php } ?>
    </table>

    <?php
    $vendeurs =[
        'André' => ['Megane' => 0, 'Clio' => 3, 'Captur' => 0],
        'Joe' => ['Megane' => 2, 'Clio' => 3, 'Captur' => 1],
        'Eric' => ['Megane' => 1, 'Clio' => 1, 'Captur' => 1],
    ];
    $nbMeganes = 0 ;
    $nbClio = 0;
    $nbCaptur = 0;


    foreach ($vendeurs as $vendeur => $ventes){
        $nbMeganes +=$ventes['Megane'];//$vendeurs['André']['Megane'];
        $nbClio +=$ventes['Clio'];
        $nbCaptur +=$ventes['Captur'];
        $ca = $ventes['Megane'] *30000 + $ventes['Clio'] *20000 + $ventes['Captur'] *40000;
        //ca = chiffre d'affaire 

        echo $vendeur.' a vendu '.array_sum($ventes).' voitures pour '.$caMegane.' <br>';
    }
    //Autre solution ...
    //echo array_sum(array_column($vendeurs , 'Megane')); // array_sum[0,2,1]);

    echo 'la mégane a été vendue '.$nbMeganes.' fois <br>';
    echo 'la Clio a été vendue '.$nbClio.' fois <br>';
    echo 'la Captur a été vendue '.$nbCaptur.' fois <br>';

    ?>

    <h1>Fonctions</h1>

<?php
    function moyenne($tableau){
        return array_sun($tableau) / count($tableau)


    }
    echo moyenne([1,2,3]); //2

    echo '<br><br>';

    function html($contenu ,$balise){
        if(!in_array($balise,['h1,'h2','p'])){
            $balise = 'p';
        }

        //!= : differente 
        //|| : ou bien 

        return"<balises>contenu</balise>";
    }
    echo html('salut','h1')
    
?>
</body>
</html>

<?php

// Les conditions
// 1 - Créer une variable $heure entre 0 et 24. Utiliser une condition pour afficher un message si l'heure est
//     - Le matin
//     - L'après midi
//     - La nuit
// 2 - Créer un bouton (<a>) vert (Connexion) en HTML / CSS et un bouton (<a>) rouge (Déconnexion).
//   - Créer une variable $isLogged. Si la variable est true, afficher le bouton rouge sinon afficher le bouton vert
//   - BONUS: En cliquant sur les boutons, ajouter un paramètre $_GET permettant de changer la valeur de $isLogged.

// Les boucles
// 1 - Grâce à une boucle, afficher tous les départements de la région 62 (62000 et 62999). Avec un for et un while.
// 2 - Définir un nombre à 3 chiffres. Ecrire une boucle qui permet au PHP de trouver ce bon nombre. A chaque itération, il faudra utiliser la
//     fonction rand(). Tant que ce nombre (random) ne correspond pas au nombre (à trouver), on réitère la boucle. On affichera le
//     nombre d'essais nécessaires pour trouver le nombre.

// Les tableaux
// 1 - Créer un tableau PHP contenant des véhicules (Marque, modèle et prix). Le prix doit être stocké sous forme de float ou d'entier.
//   - L'afficher sous cette forme (voir screen-1.png).
// 2 - On imagine le tableau suivant contenant des vendeurs et des véhicules :
//           | Megane | Clio | Captur
//     André |   0    |  3   |   0
//     Joe   |   2    |  3   |   1
//     Eric  |   1    |  1   |   1
// Exemple de ce tableau en PHP
[
    'André' => ['Megane' => 0, 'Clio' => 3, 'Captur' => 0],
    'Joe' => ['Megane' => 2, 'Clio' => 3, 'Captur' => 1],
    'Eric' => ['Megane' => 1, 'Clio' => 1, 'Captur' => 1],
];
//     PRIX
//     Megane | 30 000
//     Clio   | 20 000
//     Captur | 40 000
//
//   - Donner le nombre de ventes pour chaque vendeur
//   - Donner le nombre d'exemplaires vendus pour chaque modèle
//   - Calculer le chiffre d'affaires généré par chaque vendeur

// Les fonctions
// 1 - Créer une fonction qui permet de calculer la moyenne des nombres d'un tableau => average([1, 2, 3])
// 2 - Fonction HTML. Créer une fonction qui permet de mettre un texte dans une balise HTML.
//   - Exemple: html('Salut', 'h1') doit renvoyer <h1>Salut</h1>
//   - BONUS: On ne devra autoriser que certaines balises (h1, h2 et p par exemple).