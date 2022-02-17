<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
    require 'chat.php';

    $Chat1 = new Chat();
    $Chat1->nom = 'bianca';
    $Chat1->type= 'Chat de goutière';
    $Chat1->couleur= 'blanc';
    $Chat2 = new Chat('Mina','Chat de goutière','Noir');// pour que sa fonction on va crée des méthodes
    // on a deux objets de type "Chat"
    //var_dump($chat1,chat2)

    ?>

    <div>

        <h2>Mon premier s'appelle <?php $chat1->nom; ?></h2>
        <p>i
        Il est <?php echo $chat1->couleur; ?> et 
        c'est 
       </p>

        <p>
        Parfois , le chat fait
        <?php echo $chat1->miaule()?> 
        </p>
        <p><?php echo $chat1->joueAvec($chat2)?></p>
        <p><?php echo $chat2->joueAvec($chat1)?></p>

        <p>Mon chat a <?php echo $chat1->getPattes()
        ?> pattes</p>

       <h2><?php echo $chat1->nom ?> se bat avec 
       <?php echo $chat2->nom ?> 
       </h2>

       <p><?php echo $chat1->seBatAvec($chat2); ?></p>
       <p> Chat 1 : <?php echo $chat1->getPattes() ?></p>
       <p> Chat 2 : <?php echo $chat2->getPattes() ?></p>

    </div>
</body>
</html>