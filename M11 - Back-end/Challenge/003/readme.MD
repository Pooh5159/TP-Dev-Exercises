# 003 - On var formulair'un peu !

## 1. Easy avec une petite form' !

Ce premier défi consiste à créer un formulaire ayant plusieurs règles à respecter :
- Il possède un champ de type email “valide” (vérification via PHP)
- Il possède un mot de passe, vérifié par une confirmation, et étant plus long que 6 caractères
- Il doit permettre la récupération d’un nom et prénom

<aside>
La page de destination, avec la structure de votre choix, doit permettre l’affichage des informations collectées sous un format texte, lui même centré horizontalement et à 150px du bord haut de l’écran.
</aside>

```php
// Texte a afficher sur la page de destination
NOM PRENOM s'est inscrit correctement avec le mot de passe valide 
qui est PASSE, et avec son adresse email suivante : EMAIL
```

## 2. Trouver la bonne form'ule

Dans ce défi, les consignes sont très simples, créer un formulaire contenant :
- Un pseudo
- Un mot de passe
- Vérification du mot de passe

<aside>
L’objectif est de vérifier, dans une nouvelle page nommée **traitement.php** si le mot de passe fait au moins **8 caractères, au minimum une majuscule, et ainsi qu’un chiffre mini**
</aside>

## 3. Ce n'est pas un si simple form'alité

Créer un tableau contenant les noms de domaines suivants : 

```php
free.fr // Sans raison c'est purement gratuit ! :)
bidule.com
mailbidon.net
oulalalalalala.com
```

Créer un formulaire proposant une inscription (factice) à un utilisateur, ce formulaire est composé de 3 champs au global :
- Un champ email qui n’acceptera pas plus de 27 caractères (c’est discriminant oui, mais c’est comme ça 🙂 !!! )
- Un mot de passe à saisir
- La confirmation du mot de passe bien entendu

<aside>
L’objectif va consister **à vérifier si l’email repecte les conditions ci-dessus, ainsi que le refus des emails contenant l’un des noms de domaines** spécifiés. Et bien évidemment **nous vérifierons la validation du mot de passe et de sa confirmation.**

</aside>

## 4. Audelà de votre parcours de form'ation

Les consignes sont simples: 
- Vous devez créer un panier contenant 3 articles au format HTML / CSS avec les outils de votre choix. Les 3 articles doivent avoir un prix différents
- Un emplacement destiné aux coupons de réduction doit être implanté dans le panier
- Voici une liste des coupons utilisables ci-dessous

```
NOUNOURS10 = 10% de réduc
---
TROP_BIEN = 30% de réduc
---
MAIS_LE_PERE_NOEL_EXISTE = 75% de réduc 
(mais que sur l'article le moins cher ! faut pas pousser non plus)
```

***SI vous êtes suicidaire, essayez d’ajouter des quantités 😂***
