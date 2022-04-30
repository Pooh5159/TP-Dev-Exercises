# 903 - Ca va brass... crypter !

Imaginez une fonction permettant de crypter une chaîne de caractères composés de lettres et de chiffres, ce cryptage **devra empêcher la lecture facile de la chaine passée dans la fonction,** et devra surtout être décryptable, **uniquement grâce à une fonction adaptée**, également imaginée par vos soins.

Tous les coups sont permis et l’objectif sera de rendre totalement illisible notre chaine

> La longueur de la chaîne dîte stockable est laissée à votre appréciation personnelle ! Mais on évite plus de 255 caractères, vous devriez savoir pourquoi 😉
>

```php
// Pour encrypter notre chaîne de caractères 
function encryptString(string $str){

}

// Pour décrypter notre chaîne de caractères 
function decryptString(string $str){

}

// EXEMPLE
var_dump(decryptString("password")); // Output : EuF7pz6x7epducts4e7f4g2ty47v1x2d
var_dump(decryptString("EuF7pz6x7epducts4e7f4g2ty47v1x2d")); // Output : password
```