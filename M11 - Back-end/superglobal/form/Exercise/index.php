<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription</title>
</head>

<body>
    <form action="./engine/traitement.php" method="GET">
        <input class="champ" type="text" name="pseudo" placeholder="Pseudo" required>
        <input class="champ" type="password" name="password" placeholder="Password" required>
        <input class="champ" type="password" name="passwordConfirmation" placeholder="Password confirmation" required>
        <input class="champ" type="email" name="email" placeholder="Mail" required>
        <input class="button" type="submit" value="Inscription">
    </form>
</body>

</html>