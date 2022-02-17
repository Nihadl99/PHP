<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!-- dans ce formulaire on envoie avec un atribue-->
      <form action="POST" enctype="multipart/form-data"></form>
    <input type="file" name="photo">

    <button>Upload</button>

    <?php
    if ($success){ ?>
    <p>Voici la photo que vous avez envoyé</p>
    <img src="<?php echo $success; ?>" alt="">
    <?php } ?>

    }
</body>
</html>