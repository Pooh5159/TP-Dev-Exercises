<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moyenne élèves</title>
</head>

<body>
    <h1>Moyenne des notes des élève de 4ème D</h1>

    <?php
    // Tableau de notes
    $notesEleves = [
        "Alvin" => 13,
        "Diego" => 6.5,
        "Mathilde" => 12,
        "Frederico" => 10.5,
        "Hatem" => 17,
        "Louis" => 8.5
    ];

    var_dump($notesEleves);

    // Ajout de notes
    $notesEleves["Alain"] = 12.5;
    $notesEleves["Virginie"] = 14;
    $notesEleves["Louison"] = 11;

    var_dump($notesEleves);
    ?>

    <hr>

    <!-- Affichage des moyennes de chaque élève -->
    <h2>Moyenne de chacun des élèves</h2>
    <?php foreach ($notesEleves as $name => $moyenne) { ?>
        <p><?="$name"?> a une moyenne de <?="$moyenne"?></p>
    <?php } ?>

    <hr>

    <!-- Moyenne de la classe -->
    <?php
    function moyenneClasse1($notesEleves) {
        $sommeMoyenne = array_sum($notesEleves);
        var_dump($sommeMoyenne);
        $nombreEleves = count($notesEleves);
        var_dump($nombreEleves);
        return $sommeMoyenne / $nombreEleves;
    }
    echo "La moyenne de la classe est de " . moyenneClasse1($notesEleves);
    ?>

    <hr>

    <!-- Retrait élève et nouvelle moyenne de la classe -->
    <?php
    unset($notesEleves["Alvin"]);
    var_dump($notesEleves);
    ?>

    <p>On a retiré Alvin</p>

    <?php
    function moyenneClasse2($notesEleves) {
        $sommeMoyenne = array_sum($notesEleves);
        var_dump($sommeMoyenne);
        $nombreEleves = count($notesEleves);
        var_dump($nombreEleves);
        return $sommeMoyenne / $nombreEleves;
    }
    echo "La moyenne de la classe est de " . moyenneClasse2($notesEleves);    
    ?>

    <hr>

    <!-- Colorisation des moyennes -->
    <h2>Moyenne colorisée de chacun des élèves</h2>
    <?php
    $red = "#FF0000";
    $orange = "#FF7F00";
    $blue = "#0000FF";
    $green = "#00FF00";
    foreach ($notesEleves as $name => $moyenne) {  
        if ($moyenne < 10) {
            echo "<p>$name a une moyenne de <span style=\"color: $red\">$moyenne</span></p>";
        } elseif ($moyenne >= 10 && $moyenne < 12) {
            echo "<p>$name a une moyenne de <span style=\"color: $orange\">$moyenne</span></p>";
        } elseif ($moyenne >= 12 && $moyenne < 14.7) {
            echo "<p>$name a une moyenne de <span style=\"color: $blue\">$moyenne</span></p>";
        } else {
            echo "<p>$name a une moyenne de <span style=\"color: $green\">$moyenne</span></p>";
        }
    }
    ?>

    <hr>

    <h2>Moyenne générale colorisée</h2>
    <!-- Colorisation de la moyenne générale -->

</body>

</html>