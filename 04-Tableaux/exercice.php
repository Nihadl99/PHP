<?php

echo '<h2> Les capitales </h2>';
//déclarer un tableau qqui stocke les informations.
// Afficher le resultat en utilisant la boucle foreash.
$capitales = [
    'France' => 'Paris',
    'Espagne' => 'Madrid',
    'Italie' => 'Rome',
];

foreach ($capitales as $pays => $ville) {
    echo "la capitale de $pays est $ville. <br>";

}

echo '<h2> Population avec 20M</h2>';
$population = [
    'France' => '243459',
    'Espagne' => '2944044',
    'Italie' => '32342',

];

$somme = 0 ;

foreach($population as $pays => $pop){
    if($pop >= 20*10**6){
        echo $pays.'<br>';

    }
    if ($pays != 'Mexique'){
        $somme += $pop;
    }
    
    
}
echo 'population Europe : <br>';
echo array_sum($population)-$population['Mexique'];
echo ' OU BIEN '.$somme;

echo '<h2>Afficher la liste de tous les élèvesavec leurs notes .</h2>';

$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];


foreach ($eleves as $eleve){
    echo $eleve['nom'].' a eu ';

    
    echo '<ul>';
    foreach ($eleve['notes'] as $note){
        echo '<li>'.$note.'</li>';
    }
    echo '</ul>';
}

echo '<h2> Calculer la moyenne de Jean. On part de $eleves[2]["notes"]</h2>';

//[17 , 14 , 6 ,2,16 , 18,9]/7 notes
$moyenne = array_sum($eleves[2]['notes'])/count($eleves[2]['notes']);
echo ' La moyenne de Jean est '.round($moyenne, 2);

 echo '<h2> Combien d\'élèves ont la moyenne?</h2>';
 
 echo $eleve['nom'] ;

$nbMoyenne = 0;
foreach ($eleves as $eleve){
    $moyenne = array_sum($eleves[2]['notes'])/count($eleves[2]['notes']);
    
    echo $eleve['nom'] ;
    if($moyenne  >= 10){
        $nbMoyenne = $nbMoyenne + 1; //Augmente de 1 lle nombre de moyenne
    
        echo " a la moyenne. <br> ";

    }
    
    else { //else : sinon 
        echo "n'a pas la moyenne. <br>";
   }
}
   echo "Nombre d'élèves avec la moyenne : $nbMoyenne";

   echo '<h2> Quel(s) élève(s) a (ont) la meilleure note ? </h2>';
// etape 1 : Trouver la meilleure note 
// [10, 8, 16, 20, 17, 16, 15, 2]

$meilleure = 0;
foreach ($eleves as $eleve){
    foreach($eleve['notes'] as $note){
        if ($note > $meilleure){
            $meilleure = $note ; // $meilleur devient $note
        }
    }
}

// etape 2 : Trouver qui à la meilleure note 
foreach ($eleves as $eleve){
    foreach ($eleve['notes'] as $note){
        if ($note == $meilleure){
            echo $eleve['nom'].' a la meilleure note :'.$meilleure.'<br>'; 
            break; //Arrête le foreach des notes de l'élève
        }
    }
}

   echo '<h2> Qui a eu au moins un 20?</h2>';
   $aEu20 = false;
foreach ($eleves as $eleve){
    foreach($eleve['notes'] as $note){
        if ($note == 20){
            $aEu20 = true;
        }
    }
}
if ($aEu20){
    echo "quelqu'un a eu 20";
}
else{
    echo "Personne n'a eu 20";
}


     //Pour afficher un tableau avec les notes 
     //var_dump permet de voir tout de suite ce qu'il y a 
     //var_dump affiche ce que pense le PHP
     //array_sum fait la somme de toutes les notes 
     // count compte les élèments dans un tableaux 
     

// Diference entre "" et '' : 
// Ex: $var ='tata' ou $var ="Nihad" 
// Quand on ecrit : echo ' la variable est $var '
// Renvoie à : la variable est $var
// Quand on ecrit : echo " la variable est $var
// Renvoie à : la variable est Nihad 

?>
