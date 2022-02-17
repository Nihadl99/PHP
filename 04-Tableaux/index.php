<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo '<h2> Les tableaux numériques</h2>';
        // Un tableau est un type de donnée qui permet de stocker plusieur données.
        // on commence toujours par 0 
        //en gros on peut stocker plusieur chaines de caractères. plusieurs tableau.
        // Un tableau numérique contient des valeurs associées à un index ( 0 ,1 , 2)
        // l'index permet d'aller chercher une valeurs qui est lié a lui.

        //              0          1         2
        $prenoms = ['Fiorella','Marina','Matthieu'];

        //Comment afficher Matthieu ?
        echo $prenoms[2].'<br>';

        //Comment ajouter un prénom au tableau?
        $prenom[]= 'Toto';
        // les [] permettent de rajouter un tableaux 

        //comment afficher tous les prénoms?
        echo '<ul>' ;
        foreach( $prenoms as $index => $prenom){ // foreach : pour chaque élèments
            echo '<li>' .$index. ' : ' .$prenom. '</li>';
        }
        echo '</ul>';

        echo '<h2> Les tableaux associatifs </h2>';
        //Un tableau associatif possède des index non numériques ( que l'on définit nous même) au lieu d'avoir 
        // 0 , 1 , 2 on peut mettre ce qu'on veut , on peut définir chaques valeurs avant 
        //Un index est unique , on n'est pas obligé de définir tous les index
        $fruits = ['rouge' => 'fraises', 'jaune' => 'banane', 'vert'=> 'tomate'];


        //On peut mixer chaine ou entier pour les noms des indexs.
        //quels est l'index de tata ? 12
        //var_dump([11 => 'toto' , 'z' => 'titi','tata']);

        echo $fruits['1']; // Erreur car l'index n'existe pas 
        echo $fruits['jaune']; //affiche Banane 

        echo '<ul>';
        foreach ( $fruits as $couleur =>$fruit){
            echo '<li> le fruit'.$fruit.'est'.$couleur.'</li>';

        }
        echo '</ul>';

        echo '<h2> le tableau multidimentionnel </h2>';
        //Tableau à 3 niveaux ( ou 3 dimensions) , mettre un tableaux dans un tableau
        $utilisateurs = [
            ['prenom' => ' Fiorella' ,
             'nom' => 'Mota' , 
             'telephone' => '0600000000' , 
             'adresses'=>['Hulluch', 'lens'] ,
            ] ,
            //Tableaux à 2 dimensions 
            ['prenom' => ' Marina' , 
            'nom' => 'Mota' , 
            'telephone' => '0600000000',
            'adresses' => ['hulluch'],
            ] ,
        ];

        //comment afficher fiorella Mota vie à hulluch.
        echo $utilisateurs[0]['prenom'].' '.$utilisateurs[0]['nom'].' vit à '.$utilisateurs[0]['adresses'][0].', '.$utilisateurs[0]['adresses'][1].'<br>';
        // $utilisateur : tableau   [0] ;  pour recupeerer le prenom : on va choisir l'index 'prenom'
        // pour l'adresse on à utiliser un autre tableau.

        //Comment afficher tous les contacts avec toutes leurs adresses ?
        foreach($utilisateurs as $utilisateur){
            echo $utilisateur['prenom'].' '.$utilisateur['nom'].' vit à '.$utilisateur['adresses'];
            echo '<ul>';
            foreach($utilisateur['adresses'] as $adresse){
                echo '<li>' .$adresse. '</li>' ;

                foreach ($utilisateur['adresse'] as $adresse){
                    echo '<li>'.$adresse.'< /li>';
                }
            }
            echo '</ul>';

            echo '<br>';
        }


    ?>
</body>
</html>