<?php

// Créer une variable age et l'initialiser avec une valeur.
// Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.

$age = 15;

if ($age >= 18) {
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
}

echo "<br>";

if ($age >= 18) {
    echo "Vous êtes majeur";
    return; // or die;
}
echo "Vous êtes mienur";