<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compte en Banque</title>
</head>
<body>
    <?php 
      require 'BankAccount.php';
      require 'owner.php';


      $bankAccount01 = new BankAccount(123456, 'Matthieu'); // Matthieu a 0 sur son compte
      echo $bankAccount01->getBalance(); // Renvoie 0
      $bankAccount01->depositMoney(1000); // Matthieu a 1000 sur son compte
      echo $bankAccount01->getBalance(); // Renvoie 1000
      $bankAccount01->withdrawMoney(1000); // Matthieu a 0 sur son compte
      echo $banlAccount01->getBalance();
      
      // On renvoie une erreur si le montant du compte tombe en dessous de 0
      $bankAccount01->withdrawMoney(1000);
      $bankAccount01->depositMoney(-2000);
      echo $bankAccount01->getBlance();

      $marina = new owner('Marina', 4000, $bankAccount01);
      $marina->simulateSalary();
      $marina->simulateSalary()->payInvoice();
      echo $bankAccount01->getBalance();
      echo 'Il y a '.Owner::$count.' propriétaires.<br>';
    ?>
</body>
</html>