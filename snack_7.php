<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alunni = [
  [
    'nome' => 'Marco',
    'cognome' => 'Rossi',
    'voti' => [
      'matematica' => 6,
      'italiano' => 7,
      'geografia' => 7
    ]
  ],
  [
    'nome' => 'Paolo',
    'cognome' => 'Verdi',
    'voti' => [
      'matematica' => 8,
      'italiano' => 8.5,
      'geografia' => 5
    ]
  ],
  [
    'nome' => 'Giacomo',
    'cognome' => 'Neri',
    'voti' => [
      'matematica' => 5,
      'italiano' => 7.5,
      'geografia' => 9
    ]
  ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack_7</title>
</head>

<body>

  <style>
  ul {
    list-style: none;
  }
  </style>


  <?php

  for ($i = 0; $i < count($alunni); $i++) : ?>


  <ul>
    <li>
      <?php print_r($alunni[$i]['nome'] . ' ' . $alunni[$i]['cognome']) ?>

      <i>Media Voto: ---> </i>
      <?php print_r(round($alunni[$i]['voti']['matematica'] + $alunni[$i]['voti']['italiano'] + $alunni[$i]['voti']['geografia'] / 3)); ?>
    <li>
  </ul>


  <?php endfor ?>



</body>

</html>