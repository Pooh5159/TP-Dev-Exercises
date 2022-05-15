<?php
$bdd = new PDO("mysql:host=localhost;dbname=myDatabase", "root", "");

$requetePreparee = $bdd->prepare("SELECT * FROM movies WHERE notation= :notation");
$requetePreparee->bindValue(":notation",$_GET["notation"],PDO::PARAM_INT);
$requetePreparee->execute();
$resultats = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);

var_dump($resultats);

$bdd = NULL;