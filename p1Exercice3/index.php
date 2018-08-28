<?php
  $km = 1;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>Valeur initiale : <?php echo $km; ?></p>
    <?php $km = 3; ?>
    <p>Valeur modifiée première occurence : <?php echo $km; ?></p>
    <?php $km = 125; ?>
    <p>Valeur modifiée seconde occurence : <?php echo $km; ?></p>
  </body>
</html>
