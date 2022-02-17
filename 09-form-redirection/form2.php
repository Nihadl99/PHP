<?php
// récuperer les champs 
$mail = $_POST['email'];

//verifier les erreurs 
if (!filter_var ($email, FILTER_VALIDATE_EMAIL)){
    $errors[]="FORM 2 - L\'email n'est pas valide";

}


//redirection vers une page avec un $_GET
if (empty($errors)){
    //traitement 
     echo 'Formulaire 2 : '.$email;
    header('location:index.php?ok=form2');
}else{
    header('location:index.php?ko=form2');
}

?>
