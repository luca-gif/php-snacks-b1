<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$output = 'Accesso Negato';

if (strlen($_GET['name']) > 3) {
  $output = 'Accesso Riuscito';
} elseif (strpos($_GET['mail'], '.') || strpos($_GET['mail'], '@')) {
  $output = 'Accesso Riuscito';
} elseif (is_numeric($_GET['age'])) {
  $output = 'Accesso Riuscito';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack_2</title>
</head>

<body>

  <h2>
    <?php echo $output ?>
  </h2>

</body>

</html>