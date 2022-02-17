<?php
echo '<h2>Ecrire une boucle qui affiche les nombres de 10 à 1</h2>' ;
//Ecrire une boucle qui affiche les nombres de 10 à 1

for ($i = 10 ; $i >= 1 ; $i--){
    echo $i.'<br>';
 
}

 echo '<h2>Ecrire un boucle qui affiche uniquement les nombres pairs entre 1 à 100</h2>' ;
//Ecrire un boucle qui affiche uniquement les nombres pairs entre 1 à 100
for ($i = 1 ; $i <= 100 ; $i++){
    if ($i % 2 == 0)
    echo $i.'<br>';
 
}

 echo '<h2>Ecrire le code permettant de trouver le pgcd de 2 nombres</h2>' ;
//Ecrire le code permettant de trouver le pgcd de 2 nombres
$a = 96 ;
$b = 36 ;

while ($a != $b){
    //tant que a est different de b
    if ($a > $b){
        //si a est superieur à b 
        $a = $a - $b ;
        //  faire a = a - b
    }else{ //sinon si a < b alors :
        $b = $b - $a;
        // faire b = b - a
    }
}
echo $a;

echo '<h2>coder le jeu fizzbuzz</h2>' ;
//
for($i = 0 ; $i <= 100 ; $i++) {
    // pour i allant de 0 à 100 

    if($i % 3 == 0 && $i % 5!= 0) {
        echo "Fizz ($i) <br>";
    }
    else if ($i % 5 == 0 && $i %3 != 0) { 
        echo "Buzz ($i) <br>";

    }
    else if ($i % 15 == 0){
        echo "FIzzBuzz ($i) <br>";
    }
    
    else{
        echo $i.'<br>';
    }
}
/**
 * pour cette exo nous souhaitons savoir si chaque nombre sont soit 
 * FIZZ soit BUZZ ou les 2 
 * FIZZ = lorsqu'il est seulement divisible par 3 
 * BUZZ = lorsqu'il est seulement divisible par 5 
 * FIZZBUZZ = lorsqu'il est divisible par 15.
 * ⚠️ (15)(30) ... sont divisible par 3 et 5  donc ils affichent 
 * soit FIZZ soit BUZZ mais nous souhaitons qu'ils affichent FIZZBUZZ
 * donc on ajoute au code = ' && $i % 3 ou %5 !=0
 */


