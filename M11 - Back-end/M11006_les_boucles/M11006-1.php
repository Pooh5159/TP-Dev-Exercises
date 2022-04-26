<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <div>
        <p><?php 
            // VOS SCRIPTS CI-DESSOUS
            $x = "a";
            while ($x <= "g") {
                echo "Ceci est la lettre " . $x . "<br>";
                $x++;
            }
        ?></p>
    </div>
</body>

</html>