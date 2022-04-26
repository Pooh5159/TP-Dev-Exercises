<?php

$eleve = [
    "prenom" => "Maxime",
    "genre" => "M",
    "taille" => 157,
    "age" => 13,
    "notes" => [
        "Français" => [12, 14, 7, 11],
        "Anglais" => [14, 11, 9, 18],
        "Maths" => [7, 9, 11, 12]
    ]
];

// Vérifions maintenant quelques conditions :
//     Maxime est-il un garçon de moins de 17 ans ?
    if ($eleve["genre"] === "M" && $eleve["age"] < 17) {
        echo "Maxime est un garçon de moins de 17 ans";
    } elseif ($eleve["genre"] === "M" && $eleve["age"] > 17) {
        echo "Maxime est un garçon de plus de 17 ans";
    } elseif ($eleve["genre"] !== "M" && $eleve["age"] > 17) {
        echo "Maxime n'est pas un garçon de moins de 17 ans";
    } else {
        echo "Maxime n'est pas un garçon de plus de 17 ans";
    }
echo "<br>";

//     Mesure t-il plus de 1,57m ?
    if ($eleve["taille"] > 157) {
        echo "Il mesure plus de 1,57m";
    } elseif ($eleve["taille"] === 157) {
        echo "Il mesure 1,57 m";
    } else {
        echo "Il mesure moins de 1,57m";
    }   
echo "<br>";

//     Maxime possède t-il une moyenne en Français supérieure à 11 ?
    $moyenneFrancais = array_sum($eleve["notes"]["Français"]) / count($eleve["notes"]["Français"]);
    if ($moyenneFrancais > 11) {
        echo "Sa moyenne est supérieur à 11";
    } elseif ($moyenneFrancais === 11) {
        echo "Sa moyenne est de 11";
    } else {
        echo "Sa moyenne est inférieur à 11";
    }    
echo "<br>";

//     Sa moyenne générale est-elle inférieur ou supérieure à 12 ?
    $moyenneAnglais = array_sum($eleve["notes"]["Anglais"]) / count($eleve["notes"]["Anglais"]);
    $moyenneMaths = array_sum($eleve["notes"]["Maths"]) / count($eleve["notes"]["Maths"]);
    $moyenneGenerale = ($moyenneFrancais + $moyenneAnglais + $moyenneMaths) / count($eleve["notes"]);
    if ($moyenneGenerale > 12) {
        echo "Sa moyenne générale est supérieur à 12";
    } elseif ($moyenneGenerale === 12) {
        echo "Sa moyenne générale est de 12";
    } else {
        echo "Sa moyenne générale est inférieur à 12";
    }    
echo "<br>";

//     Maxime est-il un garçon de plus de 12 ans mesurant plus de 1,52m ?
    if ($eleve["genre"] === "M" && $eleve["age"] > 12 && $eleve["taille"] > 152) {
        echo "Maxime est un garçon de plus de 12 ans et de plus de 1,52 m";
    } elseif ($eleve["genre"] === "M" && $eleve["age"] > 12 && $eleve["taille"] < 152) {
        echo "Maxime est un garçon de plus de 12 ans et de moins de 1,52 m";
    } elseif ($eleve["genre"] === "M" && $eleve["age"] < 12 && $eleve["taille"] > 152) {
        echo "Maxime est un garçon de moins de 12 ans et de plus de 1,52 m";
    } elseif ($eleve["genre"] === "M" && $eleve["age"] < 12 && $eleve["taille"] < 152) {
         echo "Maxime est un garçon de moins de 12 ans et de moins de 1,52 m";
    } else {
        echo "Maxime n'est pas un garçon";
    }
    

echo "<br>";
//     Pour les plus courageux : (Facultatif)
//     Si Maxime est un garçon qui fait plus de 1,50m et a 13 ans ou plus, il faut alors afficher la moyenne des matières Français et Anglais uniquement, et l'afficher avec une note moyenne sur un barème de 100 pts.
    $moyenneFranglais = (($moyenneFrancais + $moyenneAnglais) / 2) * 5;    
    if($eleve["genre"] === "M" && $eleve["taille"] > 150 && $eleve["age"] >= 13) {        
        echo "La moyenne de Franglais est de $moyenneFranglais / 100";
    } else {
        echo "Les conditions ne sont pas remplies";
    }