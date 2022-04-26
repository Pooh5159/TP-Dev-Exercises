<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" name="prenom" id="prenom">
        <input type="password" name="pass" id="pass">
        <input type="submit" value="Envoyer">
    </form>
    <?php if (!empty($_GET)) { ?>
        <!-- Si $_GET n'est pas vide -->
        <p>Mot de passe : <?= $_GET["pass"]; ?> - Prénom : <?= $_GET["prenom"]; ?></p>
    <?php } ?>
</body>

</html>