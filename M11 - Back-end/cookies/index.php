<?php

// Créer un cookie qui contient la clé "firstName" qui a pour valeur "Jane" qui expire dans 21 jours

$postName = "Jane";

setcookie("firstName", $postName, time() + (60*60*24*21), "", "", true, true);
setcookie("lastName", "Doe", time() + (86400*21), "", "", true, true);

echo $_COOKIE["firstName"];
echo $_COOKIE["lastName"];
var_dump($_COOKIE);