l<?php
//Exercices
//1. Nous allons créer un formulaire de candidature à une offre d'emploi
//2. L'utilisateur pourra envoyer son CV en PDF. On devra vérifier le format et la taille (limité à 5mo).
//3. L'utilisateur pourra saisir son prénom, on renommera le CV avec son prénom et une chaine de caractère générée aléatoirement.
//4. BONUS DE LA MORT : On ajoutera l'upload d'une image. Idéalement, on essaiera de redimensionner l'image en 300x300 dans un nouveau fichier. Voir l'extension GD.
$title = $_POST['title'] ?? null;
$telephone = $_POST['telephone'] ?? null;
$email_a = $_POST['exemple@domaine.com'] ?? null;
$email_b = $post[''] ?? null;

$CV= $_POST['CV'] ?? null;
$erreurs = [];
// Vérifier qu'on a soumis le formulaire
    if (!empty($_POST)) {
        // Vérifier s'il y a des erreurs dans le formulaire
        if (strlen($title) < 0) {
            $erreurs[] = 'il y à pas de titre.';

        }

        if (empty($telephone)) {
            $erreurs[] = 'Le numéro de téléphone est requise.';
        }

 
        if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
           echo "L'adresse email '$email_a' est considérée comme valide.";
        }
        if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
           echo "L'adresse email '$email_b' est considérée comme valide.";
        } else {
           echo "L'adresse email '$email_b' est considérée comme invalide.";
        }

    }
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"> <!-- mise en page propre-->
        <h1>Candidature à l'offre d'emploi</h1>
       

        <?php if (!empty($erreurs)) { ?>
            <ul class="alert alert-danger">
                <?php foreach ($erreurs as $erreur) { ?>
                    <li><?php echo $erreur; ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
        <!--On crée un formulaire de candidature à l'offre d'emploi-->
        <form action="" method="post">

            <label for="title">Intituler de l'emploi </label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $title; ?>">

            <div class="row">
               <div class="col">
               <label for= "Nom">Nom</label>
               <input type="text" class="form-control" placeholder="Nom" aria-label="First name">
               </div>
               <div class="col">
               <label for= "Prénom">Prénom</label>
               <input type="text" class="form-control" placeholder="Prénom" aria-label="Last name">
               </div>
               </div>

            <label for="telephone">Téléphone</label>
            <input type="tel" name="telephone" id="telephone"  placeholder= "+337000000000" class="form-control" value="<?php echo $telephone; ?>">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder = "exemple@domaine.com" class="form-control" value="<?php echo $email_a ; echo $email_b ?>">

            <label for="file">Fichier</label>
            <input type="file" name="fichier" class="from-control value="<?php echo $CV; ?>">

            <button class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</body>
</html>

