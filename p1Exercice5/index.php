<?php
  $myVar = NULL;
  settype($myVar, 'int');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>Valeur initiale : <?php echo $myVar; ?></p>
    <?php $myVar = 50 ?>
    <p>Valeur finale : <?php echo $myVar; ?></p>
  </body>
</html>
