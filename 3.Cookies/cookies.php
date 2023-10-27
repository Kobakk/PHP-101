<?php
/**
 * Al ser una pagina no recoge la cookie por lo que tebemos que crear
 * otra pagina index.html donde recupere la cookie 🍪
 */
$value = 'algo de algun sitio';

setcookie("PruebaCookie", $value);
/*Expira en 1 hora */
// setcookie("PruebaCookie", $value, time()+3600);
// setcookie("PruebaCookie", $value, time()+3600, "~rasmus" ,"example.com", 1);


echo $_COOKIE("PruebaCookie");

// print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🍪</title>
</head>
<body>
    <h1>Me encantan las cookies</h1>
</body>
</html>

