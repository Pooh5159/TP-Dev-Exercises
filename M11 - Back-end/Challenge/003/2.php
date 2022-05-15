<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            width: 30%;
            display: flex;
            flex-direction: column;
        }
        div {
            margin-bottom: 8px;
            display: flex;
            flex-direction: column;
        }
    </style>
    <title>2. Trouver la bonne form’ule</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <form action="2traitement.php" method="POST">
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <label for="confirmPassword">Confirmation</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>

</body>

</html>