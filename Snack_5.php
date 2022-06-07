<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate illo rem voluptatem similique culpaexcepturi quasi vitae. fugiat incidunt maxime iure tempora, eaque enim doloribus ea harum necessitatibus. perspiciatisdolorem repellendus, laboriosam fugit placeat nostrum deserunt. Obcaecati sed aspernatur magni excepturi a possimus eosex quasi!";

$output = explode('.', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <pre>
  <?php

  print_r($output);

  ?>
  </pre>

</body>

</html>