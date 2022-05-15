<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2. On ne supprime pas au hasard : la suite</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <?php

    function deleteWithKey(array $array, $key, $hash){
        foreach ($array as $key => $verif){
            if ($verif["hash"] === $hash){
                unset($array[$key]);
                return $array;
            }
        }
        if ($verif["hash"] != $hash){
            echo "Le clé de vérification est différente";
            return $array;
        }
    };

    $monArray = [
        [
            "ref" => "A0001",
            "hash" => "b8sftlc"
        ],
        [
            "ref" => "A0002",
            "hash" => "c7pszt5"
        ],
        "bouh" => [
            "ref" => "A0003",
            "hash" => "tpmez87"
        ],
    ];

    var_dump($monArray);

    var_dump(deleteWithKey($monArray, 2, "c7pszt5"));
    var_dump(deleteWithKey($monArray, "bouh", "..."));

    ?>
</body>

</html>