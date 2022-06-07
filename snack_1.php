<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$calendario = [
  [
    'casa' => 'Olimpia Milano',
    'ospite' => 'Cantù',
    'punti casa' => 55,
    'punti ospite' => 60
  ],
  [
    'casa' => 'Roma',
    'ospite' => 'Siena',
    'punti casa' => 75,
    'punti ospite' => 80
  ],
  [
    'casa' => 'Bologna',
    'ospite' => 'Firenze',
    'punti casa' => 65,
    'punti ospite' => 60
  ],
];





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack_1</title>
</head>

<body>


  <?php for ($i = 0; $i < count($calendario); $i++) : ?>
  <ul>
    <li><?php echo $calendario[$i]['casa'] . ' - ' . $calendario[$i]['ospite'] . ' | ' . $calendario[$i]['punti casa'] . ' - '
            . $calendario[$i]['punti ospite'] . ' ' ?></li>
  </ul>
  <?php endfor ?>;


</body>

</html>