<?php
$nombre = "";  ($ape = "");
$test = "personas";
function elsaneo($value) : string{
    return htmlspecialchars($value);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){ // VERIFICAR SI EL FORM SE HA ENVIADO
    if(isset($_POST["nombre"])) { //  si el campo  con valor nombre no esta vacio
        // ¿ Cuando sanemos la entrada del valor?
        $nombre=$_POST["nombre"];// asignamos el valor del formulario con id "nombre"

        $nombre = elsaneo($nombre); // saneamos la entrada del dato
        // ¿Que hacemos con la entrada de datos?
    } else {
        echo 'el campo esta vacio ' . $nombre;
    }
}
$ape = $_POST["ape"];
function getIdForm(){
    return htmlspecialchars($_SERVER('PHP_SELF'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p><?=$test="times wait for no one"?></p>

    <p> Hola <?=$nombre?>, buenos dias</p>

    <form action="" method="post">

    <label form="nombre"> Nombre:
        <input type="text" id="nombre" name="nombre">
    </label>
    <p>
        <label for="ape">
            <input type="text" id="ape" name="ape" value="paldelChicle">
        </label>
    </p>
    <input type="submit" value="send" name="button">
    <p> Hola <?= $test . " " . $nombre ?> </p>
    <p>Hola <?=$ape?></p>
    <p><?= $test = "albondigas" ?></p>
    <p> Hola <?=$test?></p>
    </form>
    
</body>
</html>