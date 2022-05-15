<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
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
    <title>Conection</title>
</head>

<body>
    <form action="profil.php" method="POST">
        <div>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        </div>
        <div>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" placeholder="First Name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <input type="submit" id="submit" value="Login">
        </div>
    </form>
</body>

</html>