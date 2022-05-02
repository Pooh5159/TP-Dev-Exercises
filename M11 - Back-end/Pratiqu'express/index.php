<?php require_once("_includes/arrayUsers.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container">

        <div class="row">

            <?php foreach ($arrayUsers as $key => $user) { ?>
                <div class="col-12 col-md-6 col-xl-3 g-3">
                    <div class="card border border-<?= $user['gender'] === 'female' ? 'success' : 'primary' ?> border-3">
                        <a href="<?= $user['picture']['large'] ?>" target="_blank">
                            <img class="w-100" src="<?= $user['picture']['large'] ?>" alt="<?= $user['name']['first'] . " " . $user['name']['last'] ?>" title="<?= $user['name']['first'] . " " . $user['name']['last'] ?>">
                        </a>
                        <div class="p-3">
                            <a href="profil.php?id=<?= $key ?>">
                                <h2><?= $user['name']['first'] . " " . $user['name']['last'] ?></h2>
                            </a>
                            <p>Mail : <?= $user['email'] ?></p>
                            <p>Location : <?= $user['location']['city'] . ", " . $user['location']['state'] ?></p>
                            <p class="text-capitalize">Gender : <?= $user['gender'] ?></p>
                            <p>Phone : <?= $user['phone'] ?> </p>
                            <p>Cell : <?= $user['cell'] ?> </p>
                            <span class="badge rounded-pill bg<?= $arrayBG[rand(0, count($arrayBG) - 1)] ?>"><?= $user['nat'] ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</body>

</html>