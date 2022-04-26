# LES BOUCLES

## CONSIGNES

### Exercice 1 : M11006-1.php

Créer une boucle avec la méthode while, générant dans chaque affichage **"Ceci est la lettre "** suivi d'un contenu dynamique allant de la **lettre "a" à la lettre "g"**

##### Sortie attendue

```txt
// Ceci est la lettre a
// Ceci est la lettre b
// Ceci est la lettre c
//...
```

### Exercice 2 : M11006-2.php

En utilisant le tableau suivant :

```php
$cars = [
    "Audi" => "R8",
    "BMW" => "M3",
    "Bugatti" => "Veyron",
    "Ferrari" => "F430",
    "Porsche" => "Cayman",
];
```

Et en utilisant la méthode de votre choix, **afficher les résultats ci-dessus dans un format \<ul\> \<li\>** au sein de notre HTML du fichier M11006-2.php

### Exercice 3 : M11006-3.php

Même exercice que le précédent mais avec un tableau plus complet

```php
$cars = [
    [
        "brand" => "Audi",
        "model" => "R8",
        "power" => 456,
        "price" => 149_750,
        "weight" => 1_590,
        "img" => "https://www.largus.fr/images/images/2019-audi-r8-1.jpg"
    ],
    [
        "brand" => "BMW",
        "model" => "M3",
        "power" => 510,
        "price" => 107_600,
        "weight" => 1_730,
        "img" => "https://www.largus.fr/images/images/BMW-M3-M4-2014-premieres-photos-offici_22.jpg?width=940&quality=80"
    ],
    [
        "brand" => "Bugatti",
        "model" => "Veyron",
        "power" => 1_001,
        "price" => 1_100_000,
        "weight" => 1_990,
        "img" => "https://www.largus.fr/images/images/bugatti-veyron-pur-sang.jpg"
    ],
    [
        "brand" => "Ferrari",
        "model" => "F430",
        "power" => 490,
        "price" => 342_851,
        "weight" => 1_230,
        "img" => "https://www.largus.fr/images/images/ferrari-f430_1.jpg"
    ],
    [
        "brand" => "Porsche",
        "model" => "Cayman",
        "power" => 300,
        "price" => 59_692,
        "weight" => 1_460,
        "img" => "https://www.largus.fr/images/images/porsche-718-cayman-27.jpg"
    ]
];
```

Avec vos connaissances HTML et CSS, vous pouvez maintenant **créer une mini App avec ces 6 véhicules** cités ci-dessus, c'est à dire un affichage complet tel un site **"de petites annonces auto"** avec :

- image
- marque
- modèle
- poids
- puissance
- prix

##### Pour les plus téméraires :

Faire en sorte que :

- les véhicules soient filtrés du moins cher au plus cher
- le rapport poids / puissance soit affiché en dessous des modèles
- le prix s'affichent bien avec l'espace comme séparateur de milliers
