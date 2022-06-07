<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php


function getRandomNumbers($min, $max)
{
  $arrNumbers = [];

  while (count($arrNumbers) <= 15) {
    $randomNumber = rand($min, $max);

    if (!in_array($arrNumbers, $randomNumber)) {
      $arrNumbers[] = $randomNumber;
    }
  }

  return $arrNumbers;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack_4</title>
</head>

<body>

  <pre>
    <?php
    print_r(getRandomNumbers(1, 100));
    ?>
  </pre>

</body>

</html>