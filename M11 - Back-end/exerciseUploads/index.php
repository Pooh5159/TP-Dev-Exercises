<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Uploads</title>
</head>
<body>
    <form action="traitement.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fichier">
        <input type="submit" name="submit_btn" value="Envoyer">
    </form>
</body>
</html>