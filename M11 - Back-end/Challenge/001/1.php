<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. Concaténation</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <?php
    $words = ['rien', 'morceau', 'tout'];
    var_dump($words);
    echo "Je ne suis " . ($words[0]) . ", je le sais, mais je compose mon rien avec un petit " . ($words[1]) . " de " . ($words[2]) . ". \"Victor Hugo\"";
    ?>

</body>

</html>