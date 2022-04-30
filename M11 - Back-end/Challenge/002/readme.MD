# 002 - On continue à se faire mal

## 1. On ne supprime pas au hasard !

Créer la fonction deleteWithKey() qui va nous permettre de supprimer une valeur d’un tableau, en y précisant uniquement sa clé, qu’elle soit nominative ou par son index.

```php
function deleteWithKey(array $array, $key){
	// VOTRE CODE ICI
};

// N'oubliez pas de créer des tableaux pour tester :)
```

## 2. On ne supprime pas au hasard : la suite

Dans la continuité de l’exercice précédent, nous allons lui utiliser le tableau suivant :

```php
$monArray = [
	[
		"ref" => "A0001",
		"hash" => "b8sftlc"
	],
	[
		"ref" => "A0002",
		"hash" => "c7pszt5"
	],
	"bouh" => [
		"ref" => "A0003",
		"hash" => "tpmez87"
	],
];
```

L’objectif va donc consister à ajouter un troisième paramètre à notre fonction qui doit contenir la clé de vérification, déterminée par la valeur de la clé “hash” de chaque référence du tableau. 
Ainsi l'élément de tableau à supprimer ne le sera que si la paire de valeurs ref + hash correspond. Si aucun hash n’est passé dans notre fonction, alors aucune valeur ne sera supprimée.

*Ex : la ref 10002, ne pourra être supprimée que si la chaine “c7pszt5” lui est passée en paramètre ($hash).*

```php
function deleteWithKey(array $array, $key, $hash){
	// VOTRE CODE ICI
}; 
```

## 3. Un "premier" pas dans les nombres

Après avoir défini ce que les nombres suivants possèdent en commun :

```php
// NOMBRES A ANALYSER
2, 3, 5, 7, 11, ... 23, 29, 31, 37, 41, 43, ... 61, 67, 71, 73, ... 89, 97
```

Créer une fonction vous permettant de lister au travers d’une boucle tous les nombres ayant la particularité trouvée précédemment, d’un nombre de départ à un nombre d’arrivée.

```php
// Exemple :
function listNumbers(int $begin, int $end): array {
	// VOTRE CODE ICI
}
listNumbers(1,150); // Affichera [2, 3, 5, 7, 11, ... ]
```

## 4. Quand la logique s'en mêle ...

La consigne est simple, créer la fonction adéquate 🙂🙂🙂

```php
operation(5, 25) // ➞ 2
operation(2, 64) // ➞ 6
operation(2, 4) // ➞ 2
operation(8, 2097152) // ➞ 7
```