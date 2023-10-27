<?php
function sanea(string $cad):string {
    return htmlspecialchars(stripcslashes(trim($cad)));
}
?>