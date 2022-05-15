<?php

$articles = [
    [
        "name" => "Souris pour chat",
        "price" => 5,
        "img" => "https://www.auberdog.com/public/img/conteneurs/chats-trixie-jouet-souris-active-mouse-42843792495-500x500.jpeg?token=496afa9a5258507cfaf0564ad11bda92",
        "quantity" => 1,
    ],
    [
        "name" => "Panier pour chat",
        "price" => 40,
        "img" => "https://cdn.shopify.com/s/files/1/0330/6199/4628/products/Coussin-anti-stress-pour-chien-et-chat-blanc-Pleasant-avec-un-chaton-qui-se-repose-dedans_jpg_1024x1024.jpg?v=1646049205",
        "quantity" => 1,
    ],
    [
        "name" => "Arbre à chat",
        "price" => 120,
        "img" => "https://www.casapets.fr/7240-large_default/arbre-%C3%A0-chat-cr%C3%A9ativ-bleu.jpg",
        "quantity" => 1,
    ]
];

$coupon = [
    "NOUNOURS10",
    "TROP_BIEN0",
    "MAIS_LE_PERE_NOEL_EXISTE"
];

$subTotal = 0;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: sans-serif;
        }

        .article {
            box-sizing: border-box;
            padding: 0 90px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        img {
            height: 70px;
            width: 70px;
        }

        hr {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .subTotal,
        .coupon,
        .total {
            box-sizing: border-box;
            padding: 0 90px;
            display: flex;
            justify-content: right;
        }

        .subTotal p,
        label,
        .total p {
            margin-right: 5px;
        }
    </style>
    <title>4. Au-delà de votre parcours de form’ation</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <h1>Panier</h1>

    <?php foreach ($articles as $article) {
        $subTotal += ($article["price"] * $article["quantity"]); ?>
        <div class="article">
            <img src="<?= $article["img"] ?>" alt="<?= $article["name"] ?> title=" <?= $article["name"] ?>>
            <p class="name"><?= $article["name"] ?></p class="name">
            <p class="price"><?= $article["price"] ?> €</p>
            <p class="quantity"><?= $article["quantity"] ?> ex.</p>
            <p class="totalLine"><?= $article["quantity"] * $article["price"] ?> €</p>

        </div>
        <hr>
    <?php } ?>

    <div class="subTotal">
        <p>Sub total</p>        
        <p><?= $subTotal ?> €</p>
    </div>

    <div class="coupon">
        <label for="coupon">Coupon</label>
        <input type="text" id="coupon">
    </div>

    <div class="total">
        <p>Total</p>
        <p>
            <!-- subTotal - coupon -->
        </p>
    </div>


</body>

</html>