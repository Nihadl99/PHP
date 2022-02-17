<?php

/**
 * La boucle for 
 * 
 * le for est composé d'une initilisation , une condition d'exécution et un code à exécuter 
 * à chaque itération
 */


echo '<h2>la boucle for</h2>';
// la boucle suivante se répète 10 fois de 0 à 9 
for ($i = 0; $i <10 ; $i++){
    echo $i.'<br>';
}

echo '<h2> la boucle foreash </h2>';
$prenoms =['Fiorella', 'Marina', 'Matthieu'];

foreach ($prenoms as $prenom){
    echo $prenom.'<br>';
}

echo '<h2>Le  while</h2>';
/**
 * le while est smimilaire au for sauf qu'il n'y a qu'une seul instruction
 */

 $i = 0;
 while($i <10){
     // echo ++$i ; //affiche 12345678910
     $i = $i + 1;
     echo $i ;

     echo $i++ ; //affiche 0123456789
     echo $i;
     $i = $i +1;
     
}

echo '<h2>Le do while</h2>';
//le do while va s'exécuter au moins une fois
$i = 0;
 do{
     echo $i++ .'<br>';
}
 while ($i<10);


//Ecrire une boucle qui affiche les nombres de 10 à 1


//Ecrire un boucle qui affiche uniquement les nombres pairs entre 1 à 100
$i = 1;

while($i <100){
    
    $i = $i %2 == 0;
    echo $i ;
}
//Ecrire le code permettant de trouver le pgcd de 2 nombres

