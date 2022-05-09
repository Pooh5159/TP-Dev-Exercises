<?php
    var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <select name="test[]" id="" multiple>
            <option value="Test1">Test1</option>
            <option value="Test2">Test2</option>
            <option value="Test3">Test3</option>
        </select>
        <br>
        <input type="radio" name="genre" value="1">Masculin
        <input type="radio" name="genre" value="2">Féminin
        <input type="radio" name="genre" value="3">Autres
        <br>
        <input type="checkbox" name="loisirs[]" value="rando">Randonnée
        <input type="checkbox" name="loisirs[]" value="sport">Sport
        <input type="checkbox" name="loisirs[]" value="netflix">Netflix
        <br>
        <input type="submit" value="Envoyer">
    </form>

</body>

</html>