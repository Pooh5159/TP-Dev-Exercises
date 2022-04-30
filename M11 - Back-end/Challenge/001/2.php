<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. Villes</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <?php
    $cities = array(
        "Italie" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgique" => "Bruxelles",
        "Danemark" => "Copenhague",
        "Finlande" => "Helsinki",
        "France" => "Paris",
        "Slovaquie" => "Bratislava",
        "Slovénie" => "Ljubljana",
        "Allemagne" => "Berlin",
        "Grèce" => "Athènes",
        "Irlande" => "Dublin",
        "Pays-Bas" => "Amsterdam",
        "Portugal" => "Lisbonne",
        "Espagne" => "Madrid",
        "Suède" => "Stockholm",
        "Angleterre" => "Londres",
        "Chypre" => "Nicosia",
        "Lituanie" => "Vilnius",
        "République Tchèque" => "Prague",
        "Estonie" => "Tallinn",
        "Hongrie" => "Budapest"
    );
    var_dump($cities);

    asort($cities);
    var_dump($cities);

    foreach ($cities as $land => $city) {
        echo $land . " a pour capitale " . $city;
        echo "<br>";
    }

    ?>
</body>

</html>