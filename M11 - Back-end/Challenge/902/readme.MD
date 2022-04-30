# 902 - Horaires d'affluence

Nous sommes un société chargée des études statistiques des entreprises, et nous avons effectué des relevés de fréquentation clientèle dans chacun des lieux nous ayant été imposés.

Notre supérieur nous a alors transmis deux tableaux, l’un correspondant à la liste des entreprises qui ont été sondées. L’autre tableau lui contient les moyennes de fréquentation calculées sur le mois précédent, et par tranches horaires.


*Pour télécharger les tableaux, cliquer sur le fichier ci-dessous:*

📁[entreprises_frequentation.zip](entreprises_frequentation.zip)

Votre rôle va alors consister à étudier ces chiffres, et pour cela, effectuer les opérations suivantes :


## Consignes

***<span style="color: red;">Tous les résultats pourront être affichables au moyen d’un var_dump()</span>***

1. Vous devez effectuer une moyenne de fréquentation générale des 30 lieux par tranches horaires, le résultat doit être au format :
```php
// Output 
[
	"8AM_10AM" => 12.34,
	"10AM_12AM" => 14.76
	// ...
];
var_dump($res);
// PS : Les valeurs ci-dessus ne sont que des exemples
```

2. Vous devez maintenant lister toutes les entreprises ayant pour code postal 77100
```php
// Output
[
	"ACME Company",
	"ABC Company",
	"OF Course GMBH",
	"Bidule SARL"
	// ...
];
var_dump($res);
// PS : Les valeurs ci-dessus ne sont que des exemples
```

3. Nous cherchons à afficher le TOP 3 des entreprises ayant le plus de fréquentation entre 14h et 16h (”2PM_4PM”) en ordre décroissant de fréquentation ET **<span style="color: red">au format suivant :</span>**
```php
// Output
[ 
	0 => [
		"company_id" => 3,
		"company" => "ACME Company",
		"2PM_4PM" => 78.12
	],
	1 => [
		"company_id" => 30,
		"company" => "Bidule SARL",
		"2PM_4PM" => 73.53
	],
	2 => [
		"company_id" => 23,
		"company" => "ABC Company",
		"2PM_4PM" => 67.88
	]
];
var_dump($res);
// PS : Les valeurs ci-dessus ne sont que des exemples
```

4. Lister toutes les entreprises dont la moyenne des créneaux du matin (8AM_10AM & 10AM_12AM) sont supérieures à 40, et cette fois ci en ordre croissant sur la base de la valeur de fréquentation (le plus fréquenté en dernier).
```php
// Output
[ 
	0 => [
		"company_id" => 27,
		"company" => "ACME Company",
		"frequentation" => 40.12
	],
	1 => [
		"company_id" => 12,
		"company" => "Bidule SARL",
		"frequentation" => 43.98
	],
	2 => [
		"company_id" => 4,
		"company" => "ABC Company",
		"frequentation" => 47.33
	]
//...
];
var_dump($res);
// PS : Les valeurs ci-dessus ne sont que des exemples
```

<aside>
➡️ Vous pouvez continuer à vous imposer des consignes plus pointues, ou plus accessibles afin de vous exercer, ne vous arrêter pas aux tâches demandées par votre supérieur.

</aside>