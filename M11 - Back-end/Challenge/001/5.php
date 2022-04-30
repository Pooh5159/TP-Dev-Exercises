<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5. Précision</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <?php
        $values = [
            '4' => 234.7629102,
            '8' => 765.9342637463526,
            '1' => 56.6762,
            '7' => 657.9218276
        ];
        var_dump($values);

        $precision = [];

        function cutNum($number,$comma) {
            return floor($number) . substr(str_replace(floor($number), '', $number), 0, $comma + 1);
        }

        foreach ($values as $comma => $number) {
            $newNum = cutNum($number,$comma);
            array_push($precision, $newNum);
        }
            var_dump($precision);

        
    ?>
</body>

</html>