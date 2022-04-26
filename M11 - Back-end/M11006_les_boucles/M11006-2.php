<?php

$cars = [
    "Audi" => "R8",
    "BMW" => "M3",
    "Bugatti" => "Veyron",
    "Ferrari" => "F430",
    "Porsche" => "Cayman",
];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véhicules</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <ul>
        <?php foreach ($cars as $brand => $model) { ?>
            <li><?= "$brand $model" ?></li>
        <?php } ?>
        
        <br>

        <!-- OU -->
        <?php foreach ($cars as $brand => $model) : ?>
            <li><?= "$brand $model" ?></li>
        <?php endforeach; ?>
    
        <br>

        <!-- OU -->
        <?php foreach ($cars as $brand => $model) {
            echo "<li>$brand $model</li>";
        } ?>
        
    </ul>
</body>

</html>