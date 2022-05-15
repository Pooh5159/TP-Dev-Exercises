<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Traitement</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
        <a href="3.php">Retour au formulaire</a>
    </div>
    <main>
        <?php
        $domainName = [
            "free.fr",
            "bidule.com",
            "mailbidon.net",
            "oulalalalalala.com"
        ];
        $email = htmlspecialchars($_POST['email']);
        
        foreach ($domainName as $domain) {
            if (strpos($email, $domain)) {
                echo "Vous avez une adresse au domaine interdit";
                die;
            } 
        }

        echo "<br>";

        if ($_POST['password'] === $_POST['confirmPassword']) {
            echo "Bienvenue";
        } else {
            echo "Mot de passe incorrecte";
        }

        // php interupt
        
        ?>
    </main>
</body>

</html>