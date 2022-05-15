<?php
session_start();

if (!isset($_SESSION['pseudo']) or !isset($_SESSION['email'])) {
    echo "You're not log";
    echo "<br>";
    echo '<a href="index.php">Go to profil</a>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profil</title>
</head>

<body>
    <div class="profil">
        <img src="uploads/<?= $_SESSION['img'] ?>" alt="Profil picture of <?= $_SESSION['pseudo'] ?>">
        <h1><?= $_SESSION['pseudo'] ?></h1>
        <h2><?= $_SESSION['email'] ?></h2>
    </div>
</body>

</html>