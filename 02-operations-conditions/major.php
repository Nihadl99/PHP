exercice 2
<?php
$age = 21 
if ($age < 18){
    echo 'interdit <br />';
}
else if($age > 18){
    echo 'Vous pouvez rentrer <br />';
}
$age1 = 16
$age2 = 17
$age3 = 14

if ( $age1 && $age2){
    echo 'vous êtes presque majeur <br />';
}
if ($age3 && $age1){
    echo 'vous êtes jeune <br />';
}
if($age3){
    echo 'vous êtes trop jeune <br />'
}

