<!-- <?php

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    // L'email est ok
    echo $_POST['email'];
} else {
    // Email non reconnu
    echo "Erreur";
}

echo "<br>";


if ($_POST['password'] === $_POST['confirmPassword']) {
    echo "Mot de passe correct";
} else {
    echo "Erreur au niveau de la saisie";
}

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        main {
            margin-top: 150px;
            text-align: center;
        }
    </style>
    <title>1 Traitement</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
        <a href="1.php">Retour au formulaire</a>
    </div>
    <main>
        <?php if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && $_POST['password'] === $_POST['confirmPassword']) {?>
        <p><?= htmlspecialchars($_POST['lastName']) ?> <?= htmlspecialchars($_POST['firstName']) ?> s'est inscrit correctement avec le mot de passe valide
            qui est <?= htmlspecialchars($_POST['password']) ?>, et avec son adresse email suivante : <?= htmlspecialchars($_POST['email']) ?></p>
        <?php } else {
            echo "Erreur au niveau de la saisie";
        }
        ?>
    </main>
</body>

</html>