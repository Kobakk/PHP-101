<?php
  declare(strict_types=1);
  include_once 'rutinas.inc';
  $array=[-5=>-1,0, 'tercer'=>528, '-1240', null, '1e-12', 10=>-10.5, true, -12=>0, 896, 'hola'];
 /* var_dump($array);
  unset($array['tercer']);
  var_dump($array);
  $array2=array_values($array);
  echo '<br>';
  var_dump($array);
  echo '<br>';
  var_dump($array2);
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Positivo, negativo o cero con arrays</title>
</head>
<body>
  <?php foreach($array as $key => $value): ?>
    <p>El valor <?=getValor($value)?> que tiene como clave <?=$key?>
      <?= is_int($value) || is_float($value) ? " es ".posNegCero($value):' no es un valor válido'; ?></p> 
  <?php endforeach; ?>
  <h1>El array en una tabla</h1>
  <table>
    <thead>
      <th>Clave</th>
      <th>Valor</th>
      <th>Resultado</th>
    </thead>
    <tbody>
      <?php foreach ($array as $key => $value): ?>
      <tr>
        <td><?=$key;?></td>
        <td><?=getValor($value);?></td>
        <td>
          <?php 
            if(is_int($value) || is_float($value)){
              echo posNegCero($value);
            } elseif(is_string($value)){
              if(is_numeric($value)){     
                if((int)$value==(float)$value){
                  $valor=(int)$value;
                } else {
                  (float)$value;
                }
                echo posNegCero($valor=(int)$value==(float)$value?(int)$value:(float)$value);
              } else {
                echo 'no es un valor válido';
              }
            } else {
              echo 'no es un valor válido';
            }
          
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>