<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['email'] = $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1><?=$_SESSION['lastName'] . " " . $_SESSION['firstName']?></h1>
    <h2><?=$_SESSION['email']?></h2>
    <a href="news.php">News</a>
    <a href="modifpass.php">Modif your password</a>
</body>
</html>