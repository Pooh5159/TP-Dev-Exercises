<?php

var_dump($_FILES);

// On vérifie si c'est bien une méthode POST
var_dump($_SERVER["REQUEST_METHOD"]);

var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit_btn"])) {
    // On continue ...
    if ($_FILES["fichier"]["error"] !== 0) {
        // On casse
        die;
    }
    $sizeMax = 2 * 1048576; //2Mo
    if ($_FILES["fichier"]["size"] > $sizeMax) {
        die;
    }
    // Extension qu'on sougaite autorisée
    $authorizedExt = [
        "jpg",
        "pnh",
        "webp",
        "jpeg"
    ];

    // Extension du fichier uploadé
    $extension = strtolower(end(explode(".", $_FILES["fichier"]["name"]))); //jpg, png,...

    // On vérifie si l'extension est autorisée
    if (!in_array($extension, $authorizedExt)){
        die;
    }

    $filename = time().bin2hex(random_bytes(48)).".".$extension;

    move_uploaded_file($_FILES["fichier"]["tmp_name"],"uploads/".$filename);

}
