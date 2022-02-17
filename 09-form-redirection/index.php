<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1> Multiform</h1>
    <p> parfois , on à besoin d'afficher plusieurs formulaire sur une seule page.</p>


    <?php
        $form = $_GET['ok']?? null;
        $error = $_GET['ko']?? null;

        if($form){ //si le $form existe alors tu fais :
            echo"ok tu étais sur le $form"; //tu étais sur le $form
        }

        if ($error){ //si il y a une erreur alors tu fais : 
            echo " Il y a une erreur sur le $error";// il y a une erreur sur le $error
        }


    
    ?>

    <form action="form1.php" method="post">
        <input type="text" name="email" >
        <button> Form 1 </button>
    </form>
    
    <form action="form2.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <button>Form 2</button>
    </form>    

</body>
</html>