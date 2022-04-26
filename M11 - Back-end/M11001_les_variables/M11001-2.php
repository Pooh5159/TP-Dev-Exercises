<?php

// Créer une constante avec la fonction adaptée, et lui donner le nom et la valeur 18
define("NUMBER", "18");
var_dump(NUMBER);

// Utiliser cette constante dans une nouvelle variable de type string, ayant pour contenu "Le numéro des pompiers est le " puis concaténer votre constante
$phrase = "Le numéro des pompiers est le ".NUMBER;
echo $phrase;
echo "<br>";

// Concaténer les chaines de caractères suivantes :
//  - La référence "19805" est 
//  - l'appareil le plus vendu dans
//  - l'agglomération de "Pont-l'évêque"
$part1 = "La référence \"19805\" est";
$part2 = "l'appareil le plus vendu dans";
$part3 = "l'agglomération de \"Pont-l'évêque\"";
echo "$part1 $part2 $part3";