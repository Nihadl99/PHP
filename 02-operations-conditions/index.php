<?php

echo '<h2> Opération en PHP</h2>';
$nombre1 = 3;
$nombre2 = 4;
$nombre3 = 5;

//opérateurs arithmétiques
$resultat1 = $nombre1 + $nombre2;
echo "3 + 4 = $resultat1 <br />";

echo '4 x 5 = ';
echo $nombre2 * $nombre3. '<br />'; //20

echo '4 / 5 = ';
echo $nombre3 / $nombre1. '<br />'; // 1,66

//Le modulo... est le reste de la division entre 2 nombres
echo '5 % 3 = ';
echo $nombre3 % $nombre1. '<br />' ; //2

//l'exponnentielle 

echo ' 2 ^ 3 = ';
echo  2 ** 3 ; //8
echo '<br />' ;

//La priorité des calculs se fait comme en maths
echo 10 + 3 * 5; //25
echo '<br/>' ;
echo (10 + 3) * 5; //65
echo '<br />' ;

//opérateur d'incrémentation 
echo $resultat1 = $resultat1 + 3; //10
//ou 
echo $resultat1 += 3; // $resultat1 vaut 10 
echo $resultat1 ++; //$resultat1 vaut 11 renvoie 10

echo $resultat1. '<br />';

// -= , *= , /= , %= , **=
$phrase ='hello';
$phrase .='Fiorella <br />';
echo $phrase; //affiche "hello fiorella"

echo '<h2>Comparaisons en PHP</h2>';
var_dump($nombre1 == 3); //renvoie true ou false si $nombre& vaut 3 ou false sinon...

echo '3 === 3';
var_dump('3' == 3); // true car on compare la valeur seul
echo '<br />' ;
echo '3 ===3';
var_dump('3' === 3); // false car on compare la valeur et le type

//les comparaisons n'ont d'intérêt qu'avec les conditions
$estconnecte = true;

if ($estconnecte == true){
     echo 'Vous êtes connecté.';
} else {
    echo "Vous n'êtes pas connecté.";
}
$credit = 1000; // on à un crédit sur un compte 
$manque = 500 - $credit;
//Avec un crédit de 10000 ou plus , on à accès au premium
//Avec un crédit de 500 ou plus , on a accès au standard
//Avec moins de 500 , on dit à l'utilisateur combien il lui manque pour arrivé à 500 
//Avec 0 , on lui dit de revenir plus tard 

if ($credit >= 1000){
    echo 'Accès au compte premium';    
}
else if ($credit >= 500){
    echo 'accès au compte standard';
}
else if($crédit < 500){
    echo ' il manque '.$manque.' euros pour arrivé à 500';
}
else if ($crédit === 0){
    echo ' il manque'.$manque.' euroros pour arriver à 500';
}
else if ($credit < 0){
    echo 'Vous nous devez '.-$credit.'euros';
}
else {
    echo 'reviens avec la money';
}
echo '<h2> les opérateurs logiques </h2>';
// - && (and)
// - || (ou) le sympole pipe avce option + shift + l  

//Pour aller au restaurant , on doit avoir le vaccin ou un test PCR

$estVaccine = true;

$esTeteste = true ;

// vacciné ou testé
if($estVaccine || $estTeste){
    echo ' je vais au restaurant <br />';
}
// ! est la négation donc n'est pas vacciné et n'est pas testé
if(!$estVaccine && ! $estTeste){
    echo ' je ne vais pas au restaurant <br />';
}
// Pour faire un sandwitch , j'ai besoin de pain ET de poulet OU de thon 
$pain = false ;
$poulet = false ;
$thon = true ;

if ($pain && $poulet || $thon){
    echo ' je peux faire un sandwitch <br />';
}
?>