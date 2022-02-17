<?php

$photo = $_FILES['photo']?? null;
$errors =[];

var_dump($photo);

if(!empty($_FILES)){
    //verifier les erreurs du fichier (taille , type)

    if($photo['size'] > 4096){
        $errors[]= "l'image dois faire 4Ko maximum";
    }
    $mine = mime_content_type($photo['tmp_name']);
    $mineTypes = ['image/jpg','image/jpeg','image/png','image/gif'];

    // On va s'assurer que le dossier uploads existe sur le serveur
    if(is_dir('uploads')){
        mkdir('uploads');
    }


  $filename = $photo['name'];//avatar.jpeg
  //avatar.jpeg devient avatar-123456.jpeg
  $file = pathinfo($filename); //['filename' =>'avatar','extension'=>'jpeg']
  $filename = ['filename'].'-'.uniqid().'.'.$file['extension'];
  //on Upload le fichier sur le serrveur
  $filename = $filename/uniqid(); //avatar.123456.jpeg
  move_uploaded_file($photo['tmp_name'], 'uploads/'.$filename);

  $success = 'uploads/'.$filename;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <!-- dans ce formulaire on envoie avec un atribue-->
    <form action="POST" enctype="multipart/form-data"></form>
    <input type="file" name="photo">

    <button>Upload</button>
</body>
</html>