<?php

echo "Exercice 1";
echo "<br>";
/* Exercice 1 */
    // Créer une variable avec le chiffre 12 
    $var = 12;
    // Lui ajouter 9 via l'opérateur arithmétique correspondant
    $var += 9;
    // Afficher la variable avec l'opération effectuée
    echo $var;
    echo "<br>";
    echo "<br>";

echo "Exercice 2";
echo "<br>";
/* Exercice 2 */
    // Prenons l'exemple d'une somme d'argent de 450 euros, composée en billets de 5, 10, et 20 euros
    $somme = 450;
    // Nous savons que nous possédons 6 billets de 20 euros et 52 billets de 5 euros, combien reste t'il de billets de 10 euros ?
    // Poser les opérations nécessaires au calcul ci-dessous
    define("billet20", 20);
    define("billet10", 10);
    define("billet5", 5);
    $argentRestant = $somme - (6 * billet20) - (52 * billet5);
    $nbBillet10 = $argentRestant / billet10;
    echo $argentRestant;
    echo "<br>";
    echo $nbBillet10;
    echo "<br>";
    echo "<br>";

echo "Exercice 3";
echo "<br>";
/* Exercice 3*/
    // La rentrée des classes approche et les élèves de 6e sont au nombre de 155, il faut tous les placer dans des classes de 30 maximum
    $eleves = 155;
    $maxClasse = 30;
    // Combien de classes aurons nous au final ? Développer ci-dessous
    $nbClasse = ceil($eleves / $maxClasse);
    echo $nbClasse;
    echo "<br>";
    // Combien restera t'il d'enfants dans la dernière classe à être composée ? Développer ci-dessous
    $lastClasse = $eleves % $maxClasse;
    echo $lastClasse;