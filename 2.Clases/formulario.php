<?php
/*if (isset($_POST["ok"])) {
    var_dump($_POST);
    echo "Yes, ok is set";
    $nombre = sanea($datos);
    if(empty $nombre){
        $error['nombre'] = 'El campo Nombre es obligatorio'; 
    } else{

    }
} else {
    echo "No ha pasado la variable <br>";
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body style=" background-image: url(https://i.kym-cdn.com/photos/images/newsfeed/002/157/919/d03.jpg); background-repeat: no-repeat;">
    <form action="michuacan.php" method="post">
        <h1> Registro de Formulario 📄 </h1><br>
        <fieldset>
            <legend>Datos del usuario</legend>
            <label>Nombre: <input type="text" name="name"></label>
            <br>
            <label>Apellido: <input type="text" name="apellido"></label>
            <br>
            <label>Genero:
                <input type="radio" name="gender" value="Hombre"> Hombre
                <input type="radio" name="gender" value="Mujer"> Mujer
            </label>
            <br>
            <label>Fecha de nacimiento:
                <input type="date" name="date">
            </label>
        </fieldset>

        <fieldset>
            <legend>Residencia</legend>
            <label>Domicilio:
                <input type="street" id="autocomplete" placeholder="Calle">
                <input type="street" id="autocomplete" placeholder="Piso">
                <input type="street" id="autocomplete" placeholder="Puerta">
            </labelbr>
            <label> Ciudad:
                <input type="text" name="ciudad" placeholder="Logroño">
            </label>
            <br>
            <label> Codigo Postal: <input type="text" name="postal" placeholder="26007"></label>
        </fieldset>

        <fieldset>
            <legend>Datos personales</legend>
            <label> Telefono:
                <input type="text" name="telefono">
            </label>
            <br>
            <label> Correo:
                <input type="email" name="email" placeholder="example@mail.com">
            </label>
            <label for=""></label>
            <br>
            <label> Aficiones :
                <br>
                Natacion <input type="checkbox" name="natacion" value="natacion">
                Futbol <input type="checkbox" name="futbol" value="futbol">
                Karaoke <input type="checkbox" name="karaoke" value="karaoke"> 
                Baloncesto <input type="checkbox" name="baloncesto" value="baloncesto">
            </label>
            <br>
            <label>Otros:
                <br>
                <textarea name="textare" id="" cols="0" rows="0" placeholder="Otros gustos: ">
            </textarea>
            </label>
        </fieldset>

        <input type="submit" value="Enivar Formulario" name="buttom">
    </form>
</body>

</html>