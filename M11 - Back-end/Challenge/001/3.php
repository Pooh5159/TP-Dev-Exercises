<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3. Min / Max</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <?php
        $values = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
        var_dump($values);

        // Transformation string to array
        $arrayValues = explode(', ', $values);
        var_dump($arrayValues);
        
        // Sortir et trier minValues from $arrayValues
        function minValues($arrayValues){
            sort($arrayValues); // => tri croissant
            $arrayMin = array_slice($arrayValues, 0, 5);
            return $arrayMin;
        }
        var_dump (minValues($arrayValues));
        
        // Sortir et trier maxValues from $arrayValues
        function maxValues($arrayValues){
            rsort($arrayValues); // => tri décroissant
            $arrayMax = array_slice($arrayValues, 0, 5);
            return $arrayMax;
        }
        var_dump (maxValues($arrayValues));

        // var_dump(array_slice($arrayValues, 0, 5)); // => Coupe un tableau en tableau de la longueur souhaitée
        
        // Fusionner les 2 tableaux en 1
        $arrayMinMax = [];
        function minMaxValues($arrayValues){
            sort($arrayValues);
            $minArray = array_slice($arrayValues, 0, 5);
            $arrayMinMax['min'] = $minArray;

            rsort($arrayValues);
            $maxArray = array_slice($arrayValues, 0, 5);
            $arrayMinMax['max'] = $maxArray;

            return $arrayMinMax;
        }
        var_dump(minMaxValues($arrayValues));

    ?>
</body>

</html>