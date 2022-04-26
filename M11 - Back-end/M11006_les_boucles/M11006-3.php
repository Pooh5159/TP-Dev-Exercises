<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mini-App Cars</title>
</head>

<body>

</body>
<div>
    <a href="/">Retour à l'index</a>
</div>

<?php
$cars = [
    [
        "brand" => "Audi",
        "model" => "R8",
        "power" => 456,
        "price" => 149_750,
        "weight" => 1_590,
        "img" => "https://www.largus.fr/images/images/2019-audi-r8-1.jpg"
    ],
    [
        "brand" => "BMW",
        "model" => "M3",
        "power" => 510,
        "price" => 107_600,
        "weight" => 1_730,
        "img" => "https://www.largus.fr/images/images/BMW-M3-M4-2014-premieres-photos-offici_22.jpg?width=940&quality=80"
    ],
    [
        "brand" => "Bugatti",
        "model" => "Veyron",
        "power" => 1_001,
        "price" => 1_100_000,
        "weight" => 1_990,
        "img" => "https://www.largus.fr/images/images/bugatti-veyron-pur-sang.jpg"
    ],
    [
        "brand" => "Ferrari",
        "model" => "F430",
        "power" => 490,
        "price" => 342_851,
        "weight" => 1_230,
        "img" => "https://www.largus.fr/images/images/ferrari-f430_1.jpg"
    ],
    [
        "brand" => "Porsche",
        "model" => "Cayman",
        "power" => 300,
        "price" => 59_692,
        "weight" => 1_460,
        "img" => "https://www.largus.fr/images/images/porsche-718-cayman-27.jpg"
    ]
];
?>

<div class="all">
    <?php foreach ($cars as $car) : ?>
        <div class="card">
            <div class="car">
                <img src='<?= $car["img"] ?>' alt='<?= $car["img"] ?>'>
            </div>
            <div class="infos">
                <h2><?= $car["brand"] ?> <?= $car["model"] ?></h2>
                <p>Poids : <?= $car["weight"] ?> kg</p>
                <p>Puissance : <?= $car["power"] ?> cv</p>
                <p>Prix : <?= $car["price"] ?> €</p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</html>