<?php include_once("_includes/arrayUsers.php"); ?>
<?php
$id = htmlspecialchars($_GET["id"]);
$user = $arrayUsers[$id];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?= $user['name']['first'] . " " . $user['name']['last'] ?> Profil</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?= $user['picture']['large'] ?>" alt="<?= $user['name']['first'] . " " . $user['name']['last'] ?>" title="<?= $user['name']['first'] . " " . $user['name']['last'] ?>">
                <h1 class="text-danger"><?= $user['name']['first'] . " " . $user['name']['last'] ?></h1>
                <p>Email : <?= $user['email'] ?></p>
                <p>Date of birth : <?= date("d/m/Y", strtotime($user['dob']['date'])) ?></p>
                <p>Nationality : <?= $user['nat'] ?></p>
                <p>GPS : <?= $user['location']['coordinates']['latitude'] ?> <?= $user['location']['coordinates']['longitude'] ?></p>
            </div>
        </div>
        <a href="index.php">
            <span class="badge bg<?= $arrayBG[rand(0, count($arrayBG) - 1)] ?>">Home</span>
        </a>
    </div>
</body>

</html>