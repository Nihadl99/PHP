<?php
// crée une boucle qui affiche 10 étoiles ⭐️
// Imbriquer la boucle dans une autre une autre boucle affin d'afficher 10 lignes de 10 étoiles  
for ($i = 1 ; $i <= 10 ; $i++){
for ($j = 1; $j <= 10 ; $j++){
    echo '⭐️';
}
   echo'<br>';
}    
 
//modifier le code pour obtenir un rectangle 
for ($i = 1 ; $i <= 10 ; $i++){
    for ($j = 1; $j < $i + 1 ; $j++){
        echo '⭐️';
    }
       echo'<br>';
    }    
/**
 * on à remplacer "10" par "$i"
 * tantque j<i on fait la boucle on rajoute +1 pour passer de 0 à 1 au lieu de 
 * passer de 0 à 0 
 */

for ($i = 0 ; $i < 10 ; $i++){
    for ($j = 0; $j < 10 - $i ; $j++){
        echo '⭐️';
    }
       echo'<br>';
    }  
    /**
     * on fait l'inverse 
     */