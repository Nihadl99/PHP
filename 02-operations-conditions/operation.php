<?php
$variable1 = 15
$variable2 = 5
$variable3 = 8
 $resultat1 = $variable1 + $variable2 + $variable3
 echo $variable1.' + '.$variable2.'+'.$variable3.' = '.$resultat1 <br />
 
 $resultat2 = $variable1 * ($variable2 - $variable3)
 echo $variable1 * ($variable2-$variable3) = $resultat2 <br />
 
 $resultat3 = ($variable3 - $variable2) / $variable1
 echo ($variable3 - $variable2) / $variable1 = $resultat3 <br />
 
 if ($resultat1 <20 || $resultat2 <20 || $resultat3 <20){
     echo 'Une des operation renvoie moins de 20.'
 }