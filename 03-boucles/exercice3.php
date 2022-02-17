<?php
echo '<h2>afficher la table de multiplication du chiffre 5 </h2>';
//afficher la table de multiplication du chiffre 5 
for ($i = 1 ; $i <= 10 ; $i++){
  for ($j = 5 ; $j <= 5 ; $j++){
      echo ($i.'x'.$j.'='.$i*$j.'<br>');
  }
}

echo '<h2>afficher la table de multiplication de 1 à 10 </h2>';
//afficher l'ensemble des table de multiplication 
for ($i = 1 ; $i <= 10 ; $i++){
    for ($j = 1 ; $j <= 10 ; $j++){
        echo ($i.'x'.$j.'='.$i*$j.'<br>');
    }
}
/**
 * Correction 
 * $table = 5 ;
 * for ($table = 1 ; $table <= 10; $table++){
 *    echo '<h2>table de '.$table.'</h2>;
 *    for ($i = 1 ; $i <= 10 ; $i++){
 *      echo $table.' x '.$i.' = '.$table $ $i.'<br>
 *     }
 * }
 */
?>


