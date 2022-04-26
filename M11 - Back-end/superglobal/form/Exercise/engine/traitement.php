<?php
var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>User information :</h1>
        <?php

        if (
            !empty($_GET["pseudo"])
            && !empty($_GET["password"])
            && !empty($_GET["passwordConfirmation"])
            && !empty($_GET["email"])
            && $_GET["password"] === $_GET["passwordConfirmation"]
            && filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)
        ) {
            echo "<h2>Les mots de passes sont similaires.</h2>";
            echo "<p>Pseudo : " . htmlspecialchars($_GET["pseudo"]);
            echo "<p>Password : " . htmlspecialchars($_GET["password"]);
            echo "<p>Password confirmation : " . htmlspecialchars($_GET["passwordConfirmation"]);
            echo "<p>Mail : " . htmlspecialchars($_GET["email"]);
        } else {
            echo "<h2>Erreur au niveau de la saisie !</h2>";
        }
        ?>
    </div>
</body>

</html>