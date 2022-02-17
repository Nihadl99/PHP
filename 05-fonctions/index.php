<?php
echo '<h2> les fonctions </h2>';

//Une fonction permet de ranger du code php
// affin de le réutiliser plusieurs fois.

echo 'bonjour Fiorella <br>';
echo 'bonjour Toto <br>';

$prenom = 'jean';

//On déclare une fonction qu'on pourra utiliser plus tard.
//Une fonction peut contenir des paramètres/arguments
// un argument est une variable qui est utilisable uniquement
//dans ma fonction
//l'argument $age a une valeur par défaut , ce qui le rend optionnel
function bonjour ($prenom , $age = 0){
    //echo "Bonjour $prenom , tu as $age ans. <br>";
    return "Bonjour $prenom , tu as $age ans. <br>";

}


echo bonjour('Fiorella');//afficher bonjour en appelant la fonction bonjour 
//qui doit etre déclarée au préaliable
echo bonjour('Toto');
echo strtoupper(bonjour('Titi'));
// void = la fonction ne renvoie rien 
//strtoupper = met en majuscule 

// le return permet de retourner quelque chose

// On va essayer de créer une fonction permettant d'additionner 
//2 nombres.
function addition($nombre1,$nombre2){
    // il nous faut 2 arguments (1 pour 4 et 1 pour 8)
    return $nombre1 + $nombre2;
}

echo addition(4,8); //Affiche 12
echo addition(2,3); //Affiche 5

echo addition(1,3) + addition(5,5);//14
//comment savoir si il faut utiliser un echo ou un return 
//si jamais on veut que la fonction servent a plusieurs moment 
//il faut toujours mettre un return 


//____________________________________________
//$mois est une variable avec une portée globale 
//Pas utilisable dans une fonction 
$mois = ['Janvier','Fevrier','Mai'];

//portée des variables 
//$jours est une variable avec une portée locales 
//(utilisable uniqument dans la fonction)
function jour($numeroJour){
    global $mois;//On autorise la variable $mois à etre utilisable dans la fonction

    $jours = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
    return $jours[$numeroJour - 1];
}
//___________________________________________
//On peut faire appel à d'autres fonctions dans une fonction
//On peut donc appeller une fonction dans elle-même
//On appelle ça la récursivité 
//Exemple : Fibonacci 
function fibonacci($number){
    if($number == 0){
        return 0;// le return arrête la fonction
    }
    if ($number == 1){
        return 1;
    }

    return fibonacci ($number - 1) + fibonacci($number - 2);
}

for ($i = 0;$i <= 16;$i++){
    echo fibonacci($i); //Affiche 0 ,1,1,2,3,5...89
}
