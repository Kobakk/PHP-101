<?php
declare(strict_types=1);
require_once "rutinas.inc";
$var1=-1254.25;
$var2=2530;
$var3=-12;
$var4=0;
$var5=589;
$var6=0;
$variable = 'var';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Positivo, negativo o cero</title>
</head>
<body>
  <h1>Positivo, negativo o cero</h1>
  <p>El número <?=$var1?> es 
  <?= posNegcero($var1) ?> </p>
  <p>El número <?=$var2?>
  <?=  posNegcero($var2)  ?> </p>
</p>
  <p>El número <?=$var3?>
  <?php  posNegcero($var3)  ?> </p>
</p>
  <p>El número <?=$var4?>
  <?=  posNegcero($var4) ?> </p>
</p>
  <p>El número <?=$var5?>
  <?= posNegcero($var5)  ?> </p>
</p>
  <p>El número <?=$var6?>
  <?=  posNegcero($var6) ?> </p>
</p>
  <?php for($x=1;$x<7;$x++): ?>
    <p>El número <?=${$variable.$x}?>  <?= posNegcero(${$variable.$x}) ?> </p>
  <?php endfor; ?>
</body>
</html>
