<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>

<body>
    <form action="traitement.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="pseudo">Last Name</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" minlength="5">
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
            <label for="confirmPassword">Confirmation</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
        </div>

        <div>
            <label for="file">Upload a files</label>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <input class="submit" type="submit" name="submit" value="Register">
        </div>
    </form>
</body>

</html>