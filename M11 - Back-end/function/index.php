<?php

function concatenate($param1, $param2) {
    return "$param1 $param2";
}

echo concatenate("Bonjour", "tout le monde");
echo "<br>";

// OU

$variable1 = "Bonjour";
$variable2 = "tout le monde";
$variable3 = "Salut";

echo concatenate($variable1, $variable2);
echo "<br>";
echo concatenate($variable3, $variable2);
echo "<br>";


// Créer un fonction qui multipliera le 1er paramètre par 2, additioné au 2e paramètre multiplié par 3
// ($param1 = *2)
// ($param2 = *3)
// fonction additionne la somme des produits ci-dessus

function customFunction($param1, $param2) {
    return $param1 * 2 + $param2 * 3;
}

echo customFunction(5,8);
echo "<br>";

// OU

function customFunction2($number1, $number2) {
    $sommeNumber1 = $number1 * 2;
    $sommeNumber2 = $number2 * 3;
    return $sommeNumber1 + $sommeNumber2;
}

echo customFunction2(5,8);
echo "<br>";


// Retourner la taille moyenne des valeurs inscrites
function averageSize($array){
    return array_sum($array) / count($array);
}

echo averageSize([163,178,165,198]);
echo "<br>";

// OU

function averageSize2($array){
    $somme = array_sum($array);
    $nombreDeValeurs = count($array);
    return $somme/$nombreDeValeurs;    
}

$sizes = [213, 210, 187, 143];

echo averageSize2($sizes);
echo "<br>";


// Créer une fonction prenant en compte une chaine de caractères et un nombre, le retour de cette chaine doit être le contenu de la chaine fournie limité au nombre de caractères spécifiés en paramètre 2
// Exemple : limitString("Lorem ipsum dolor sit amet", 4) donnera la réponse "Lore"

function caraMax($string, $number) {
     return substr($string, 0, $number);
}

echo caraMax("Lorem ipsum", 4);
echo "<br>";


// NIVEAU INTERMEDIAIRE
// Créer une fonction permettant de générer une chaine de caractères composées de ; respectivement ; 3 chiffres, un tiret, 5 lettres, un tiret, 3 chiffres, de manière aléatoire
// EX : 123-ABCDE-456

function aleatoryCaraNumber($numbers1, $string, $numbers2) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $shuffledCharacters = str_shuffle($characters);
    $arrayCharacters = str_split($shuffledCharacters);
    $string = $arrayCharacters[rand(0,25)];
    $numbers1 = rand(100, 999);
    $numbers2 = rand(100, 999);
    return "$numbers1 - $arrayCharacters - $numbers2";
}

echo aleatoryCaraNumber($numbers1, $string, $number2);
echo "<br>";

// OU

function randomVar() {
    // On créé des valeurs aux deux nombres de manières aléatoires
    $nb1 = rand(1, 999);
    $nb2 = rand(1, 999);
    if ($nb1 < 10) {
        $nb1 = "00" . $nb1;
    } elseif ($nb1 < 100) {
        $nb1 = "0" . $nb1;
    }
    if ($nb2 < 10) {
        $nb2 = "00" . $nb2;
    } elseif ($nb2 < 100) {
        $nb2 = "0" . $nb2;
    }
    // On déclare la variable prête à accueillir les futures lettres
    $letters = "";
    // On créé une chaine de caractères aléatoires
    $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $arrayAlphabet = str_split($alphabet);
    // On boucle 5 fois notre tableau des lettres de l'alphabet
    for ($i =0; $i < 5; $i++){
        // On pioche au hasard une lettre qu'on greffe à letters
        $letters .= $arrayAlphabet[rand(0,25)];
    }
    return $nb1 . "-" . $letters . "-" . $nb2;
}

echo randomVar();
echo "<br>";


// NIVEAU PLUS AVANCE !!! Attention

// Créer une fonction qui nous sortira un tableau de valeurs
// Le SEUL paramètre d'entrée doit être un tableau de produits (fourni ci-dessous)
// la valeur retournée doit être sous la forme
// [
//   "REF_PRODUIT" => "PRIX_TTC",
//   ...
// ]
// IMPORTANT : Le retour doit être fait en ordre alphabétique de la refProduit

$produits = [
    [
        "refProduit" => "Prod0001",
        "prix_ht" => 1.87,
        "tva"  => 5.5
    ],
    [
        "refProduit" => "Prod0012",
        "prix_ht" => 14.65,
        "tva"  => 10
    ],
    [
        "refProduit" => "Prod0002",
        "prix_ht" => 1.87,
        "tva"  => 5.5
    ],
    [
        "refProduit" => "Prod0008",
        "prix_ht" => 119,
        "tva"  => 20
    ]
];
