<?php
/* EL SANITZADO INSANO */
if(isset($_POST["ok"])){
    var_dump($_POST);
    $amongas = $_POST;
    echo $amongas;
} else{
    echo "No ha pasado la variable <br>";
}

?>
<html>
    <body>
    Welcome <?php echo $_POST["name"];?> 😎<br>
    Apellido <?php echo $_POST["apellido"]; ?> 👀<br>
    Usted es <?php echo $_POST["gender"]; ?> 🧑 <br>
    </body>
</html>