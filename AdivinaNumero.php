<?php
require_once 'rutina.inc';

// if(isset ($_POST['ok'])){
//     var_dump($_POST);
//     $datos = $_POST; 
//     echo $_POST;
// } else{
//     echo "Error";
// }

$numeromagico =  rand(1, 3);

if(isset($_POST['ok'])){
    var_dump($_POST);
    $numero = $_POST['numero'];
    var_dump($numero);
} else {
    echo "Introduce valor valido";
}
test();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo.css">
    <title>Formulario</title>
</head>
<body>
    <h1>Juego PHP</h1>
    <form action="" method="post">
        <?php echo $numeromagico . "\n"?>
        <fieldset>
        <legend>Adivina el numero</legend>
        <input type="text" name="numero">
        </fieldset>
        <p><input type="submit" value="Enviar" name="ok"></p>
        <?php game($numero,$numeromagico)?>
    </form>

</body>
</html>