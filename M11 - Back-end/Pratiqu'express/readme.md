# Pratiqu’express !

## Le contexte

Après avoir étudié longuement les tableaux en PHP, il est venu l’heure de les manipuler au sein de projets Front, notamment grâce à Bootstrap.

[arrayUsers.zip](arrayUsers.zip)

## Consignes

L’objectif va alors consister à exploiter les données fournies dans un tableau d’utilisateurs.

Pour cela il faudra suivre les règles suivantes :

1. Créer un template Bootstrap qui nous permettra d’afficher par ligne : 
    - 4 profils au format Card BS5 si Desktop
    - 2 profils au format Card BS5 si tablette
    - 1 profil au format Card BS5 si Smartphone
2. Afficher les infos suivantes :
    - Nom
    - Prénom
    - Email
    - Ville
    - Genre
    - Image de profil
    - Numéro de tel
3. Inclure les 20 utilisateurs du tableau $arrayUsers depuis un fichier php
4. Intégrer les données utilisateurs au sein du template précédemment créé

### Autres impératifs

- La **couleur du contour des cards BS5** devra respecter la logique suivante :
    - Contour bleu s’il s’agit d’un homme
    - Contour vert s’il s’agit d’une femme
- L’affichage de la photo dans les cards se fera **depuis la valeur picture → thumbnail,** mais un lien devra ouvrir **un nouvel onglet** avec la photo au format **large**
- La nationalité devra être au format badge (étiquette) et prendre une couleur autre que le vert, **mais cette fois-ci “au hasard”**
- La date de naissance devra respecter le **format FR soit : DD/MM/YYYY**

## 🚧 Pour les plus aguéris :

Vous pouvez créer une page appelée profil.php, qui devra afficher un utilisateur en particulier, c’est à dire celui fourni via le paramètre de votre choix dans l’URL. 

> Exemple: *profil.php?id=c531a25e-f06f-437f-af22-64b741bfeecd*
>