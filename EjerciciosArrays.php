<?php
// Ejercicio 5
function ejercicio5(){
    $arr = ['Madrid','Barcelona','Londres', 'New York', 'Los Ángeles', 'Chicago'];
    $index = 0;
    foreach ($arr as &$value){
        echo "$value  :  index[$index] <br>" ;
        $index++;
    }
}

// Ejercicio 6
function ejercicio6(){
    $ciudades = array(
    "Madrid" => "MD",
    "Barcelona" => "BC",
    "Londres" => "LO",
    "New York" => "NY",
    "Los Ángeles" => "LA",
    "Chicago" => "CH",
    );

    foreach ($ciudades as $ciudad => $value){
        echo "$ciudad. :  $value <br>";
    }

} 
function ejercicio7(){
    $arr0 = ["Lagartija", "Araña", "Perra", "Gata", "Ratón"]; $arr1 = ["12", "34", "49", "53", "12"]; $arr2 = ["Sauce", "Pino", "Naranjo", "Chopa", "Perro", "34"];
    $arrayCombinado = array_merge($arr0, $arr1, $arr2);

    foreach ($arrayCombinado as $clave => $valor){
        echo "Clave: $clave, Valor: $valor<br>";
    }
}

function ejercicio8(){ 
    $estadiosFutbol = [
    "Barcelona" => "Camp nou",
    "Real Madrid" => "Santiago Bernabeu",
    "Londres" => "LO",
    "New York" => "NY",
    "Los Ángeles" => "LA",
    "Chicago" => "CH",
    ];
}
function ejercicio9(){
    $numeros = [3, 2, 8, 123, 5, 1];
    $arrayAsociativo = ["zero" => 3, "uno" => 2, "dos" => 8, "tres" => 123, "cuatro" => 5, "quinto" => 1];

 }
function ejercicio10(){
    $arr = [ 5 =>1, 12 => 2, 13=> 56, "x" =>42];
    foreach ($arr as $clave => $valor){
        echo "Clave: $clave, Valor : $valor <br> ";
    }

    $valEliminado = array_pop($arr);

    echo "borramos el utlimo valor <br> ";
    foreach ($arr as $clave => $valor){
        echo "Clave: $clave, Valor : $valor <br> ";
    }
    array_splice($arr, 0);
    echo "array borrado";
    foreach ($arr as $clave => $valor){
        echo "Clave: $clave, Valor : $valor <br> ";
    }
 }
function ejercicio11(){
    $LosSimpson = ["padre" => "Homero", "madre" => "Marge", "hijo1" => "Bart", "hijo2" => "Laysi" ]; 
    $LosGriffin = ["padre" => "Peter", "madre" => "Marge", "hijo1" => "Bart", "hijo2" => "Laysi" ];    
    $arrayJunto = array_merge($LosSimpson, $LosGriffin);
    foreach ($arrayJunto as $clave => $valor){
        echo "Clave: $clave, Valor : $valor <br> ";
    }
 }
function ejercicio12(){
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body style="font-family: consolas; text-align: center;">
<h1>Ejercicios Arrays</h1>
   <h2>5</h2> 
   <p>Indices array</p>
    <?php ejercicio5();?>
    <h2>6</h2>
    <p>Arrays asociativos, clave valor</p>
    <?php ejercicio6();?>
    <h2>7 </h2>
    <p>Arrays combinados usando <span style=" color: blue; font-style: italic;">array_merge</span></p>
    <?php ejercicio7();?>
    <h2>Ejercicio 9</h2>
    <table>
        <tr>
            <th>Campo</th>
            <th>Valor  </th>
            <?php
            echo "<tr>";
            echo "<td>campo</td>";
            echo "<td>valor</td>";
            echo "</tr>";
            ?>
        </tr>
    </table>
    <h2>Ejercicio 10</h2>
    <?php ejercicio10()?>

    <h2>Ejercicio 11</h2>
    <?php ejercicio11()?>

</body>
</html>