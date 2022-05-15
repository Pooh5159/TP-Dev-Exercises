<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. On ne supprime pas au hasard !</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <?php
    function deleteWithKey(array $array, $key){
        unset($array[$key]);
        return $array;
    };

    $arrayOne = [ 10, 25, 87, "patate", "cuillère", 8.2];
    $arrayTwo = [
        "orange" => "clémentine",
        "jaune" => "banane",
        "vert" => "pomme",
        "rouge" => "fraise"
    ];

    var_dump($arrayOne, $arrayTwo);

    var_dump(deleteWithKey($arrayOne, 3));
    var_dump(deleteWithKey($arrayTwo, "vert"));

    ?>
</body>

</html>