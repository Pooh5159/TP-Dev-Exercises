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
    <title>2 Traitement</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
        <a href="2.php">Retour au formulaire</a>
    </div>
    <main>
        <?php
        $password = htmlspecialchars($_POST['password']);
        $upperCase = preg_match('@[A-Z]@', $password);
        $lowerCase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);

        if(!$upperCase || !$lowerCase || !$number || strlen($password) < 8) {
            echo "Mot de passe incomplet";
        } else {
            echo "Mot de passe correctement renseigné";
        }
        ?>
    </main>

    <!-- preg_match() -->

</body>

</html>