<?php

$notesEleves = [
    'Alvin'     => 13,
    'Diego'     => 6.5,
    'Mathilde'  => 12,
    'Frederico' => 10.5,
    'Hatem'     => 17,
    'Louis'     => 8.5,
];
// On stocke la fonction pour calculer une moyenne
function calculMoyenne(array $array)
{
    $sommeElem = array_sum($array);
    $nbElem = count($array);
    return $sommeElem / $nbElem;
}
function colorize($average, $elem)
{
    if ($average < 10) echo "<li>$elem : <span style='color:red'>$average</span></li>";
    if ($average >= 10 and $average < 12) echo "<li>$elem : <span style='color:orange'>$average</span></li>";
    if ($average >= 12 and $average < 14.7) echo "<li>$elem : <span style='color:blue'>$average</span></li>";
    if ($average >= 14.7) echo "<li>$elem : <span style='color:green'>$average</span></li>";
}

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Révisions : Cas pratique</title>
</head>

<body>
    <h1>Moyenne des élèves de 4ème D</h1>
    <!-- 
1. On ajoute les notes suivantes 
    -->
    <!-- 
        Alain : 12,5
        Virgine : 14
        Louison: 11
    -->
    <?php
    // va chercher Alain dans les clés, si il n'existe pas, ajoutes le avec sa note 
    $notesEleves["Alain"] = 12.5;
    $notesEleves["Virginie"] = 14;
    $notesEleves["Louison"] = 11;
    // var_dump($notesEleves);
    ?>
    <!-- 
2. Afficher via une boucle for puis une boucle foreach la moyenne de chacun des élèves de la classe
     -->
    <div id="moyenneElevesAvecForeach">
        <h2>Moyenne de chacun des élèves</h2>
        <ul>
            <?php
            foreach ($notesEleves as $prenom => $moyenne) {
                echo "<li>$prenom : $moyenne</li>";
            }
            ?>
        </ul>
    </div>
    <div id="moyenneElevesAvecFor">

    </div>

    <!-- 
3. Calculez la moyenne de la classe en utilisant impérativement une fonction avec pour paramètre le tableau $notesEleves
    -->
    <div class="moyenneClasse">
        <p>La moyenne est de <?= calculMoyenne($notesEleves) ?>
    </div>

    <!-- 
4. On retire Alvin du tableau de notes
     -->
    <?php unset($notesEleves['Alvin']); ?>
    <!-- 
5. Ré-effectuez et affichez la nouvelle moyenne de classe en dessous de la moyenne précédente. 
    -->
    <div class="nouvelleMoyenne">
        <p>INFO : On a retiré Alvin</p>
        <p>La moyenne est de <?= calculMoyenne($notesEleves) ?>
    </div>

    <!--
6. Affichons les notes de chacun des élèves en fonction de
leur moyenne, toujours dans notre boucle, voici les correspondances :
• En dessous de 10, afficher la moyenne en rouge
• De 10 inclus à 12, en orange
• De 12 inclus à 14.7, en bleu
• A partir de 14.7, en vert
    -->
    <div class="moyenneParEleveColor">
        <h2>Moyenne de chacun des élèves</h2>
        <ul>
            <?php
            foreach ($notesEleves as $prenom => $moyenne) {
                colorize($moyenne, $prenom);
            }
            ?>
        </ul>
    </div>

    <!-- 
7. La moyenne générale héritera des mêmes réglages 
    -->
    <div class="moyenneGeneraleColor">
        <?php
        $moyenne = calculMoyenne($notesEleves);
        colorize($moyenne, "Classe")
        ?>
    </div>

</body>

</html>