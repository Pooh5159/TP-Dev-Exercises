<?php

$pseudo = htmlspecialchars($_POST['pseudo']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$password = htmlspecialchars($_POST['password']);
$confirmPassword = htmlspecialchars($_POST['confirmPassword']);
$file = $_FILES['file'];

$authorizedExt = ["jpg", "jpeg", "png", "gif"];

$fileParams = explode(".", $_FILES['file']['name']);
$extension = strtolower(end($fileParams));

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {

    if (strlen($pseudo) < 5) {
        echo "Pseudo too short";
        die;
    }

    if ($email === FALSE) {
        echo "Invalid email";
        die;
    }

    if ($password !== $confirmPassword) {
        echo "Non similar password";
        die;
    }

    if (!in_array($extension, $authorizedExt)) {
        echo "None accepted file extension";
        die;
    }
};


$filename = time() . bin2hex(random_bytes(15)) . "." . $extension;
$status = move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $filename);

if ($status) {
    session_start();

    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['email'] = $email;
    $_SESSION['img'] = $filename;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Verification</title>
</head>

<body>
    <div class="traitement">
        <p>Welcome !</p>
        <a href="profil.php">Go to profil</a>
    </div>
</body>

</html>