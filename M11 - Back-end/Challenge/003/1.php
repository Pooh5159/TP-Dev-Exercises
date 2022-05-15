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
    <title>1. Easy avec une petite form’ !</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>

    <form action="1traitement.php" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" minlength="6">
        </div>
        <div>
            <label for="confirmPassword">Confirmation</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
        </div>
        <div>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        </div>
        <div>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="First Name">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>

</body>

</html>