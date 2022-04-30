<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Add values</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <?php
        $baseArray = ['Clio', '308', 'Fiesta'];
        var_dump($baseArray);

        $micra = "Micra";
        $c4 = "C4";
        var_dump($micra, $c4);

        // Push to first place
        array_unshift($baseArray, $micra, $c4);
        var_dump($baseArray);

    ?>
</body>

</html>