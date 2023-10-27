<?php
 if(isset($_POST["ok"])){
    var_dump($_POST);
    echo "Yes, ok is set";
 } else{
    echo "No ha pasado la variable <br>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cofee App</title>
</head>

<body>
    <div style="background-color: #79c2d0; 
    border-radius: 50px; 
    padding-left: 55px;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    ">
        <form action="michuacan.php" method="post">
            <h1> Registro de Formulario 📄 </h1><br>
            <fieldset>
                <legend>Datos del contacto</legend>
                <label>Nombre: <input type="text" name="name"></label>
                <br>
                <label>Apellido: <input type="text" name="apellido"></label>
                <br>
                <label>Genero:
                    <input type="radio" name="gender" value="Hombre"> Hombre
                    <input type="radio" name="gender" value="Mujer"> Mujer
                </label>
            </fieldset>

            <br>
            <label>Fecha de nacimiento:
                <input type="date" name="date">
            </label>
            <br>
            <label>Domicilio:
                <input type="street" id="autocomplete" placeholder="Calle">
                <input type="street" id="autocomplete" placeholder="Piso">
                <input type="street" id="autocomplete" placeholder="Puerta">
            </label>
            <br>
            <label> Ciudad:
                <input type="text" name="ciudad" placeholder="Logroño">
            </label>
            <br>
            <label> Codigo Postal: <input type="text" name="postal" placeholder="26007"></label>
            <br>
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
                Natacion <input type="checkbox" name="natacion" value="natacion"> <br>
                Futbol <input type="checkbox" name="futbol" value="futbol"><br>
                Karaoke <input type="checkbox" name="karaoke" value="karaoke"> <br>
                Baloncesto <input type="checkbox" name="baloncesto" value="baloncesto"> <br>
            </label>
            <label>Otros:
                <br>
                <textarea name="textare" id="" cols="10" rows="10" placeholder="Otros gustos: ">
            </textarea>
            </label>
            <input type="submit" value="Enivar Formulario" name="buttom">
        </form>
    </div>
</body>

</html>