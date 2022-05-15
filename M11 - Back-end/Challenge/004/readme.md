# 004 - Allez on re-form-ule ! 

![image](https://tpdevweb2022.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2F3f65831b-eca1-46da-b053-9d1dbaded165%2FUntitled.png?table=block&id=42d715cb-ed41-4af1-89b2-a1610c4a5463&spaceId=41f33265-c0e4-4b2b-b69d-b30a10a808f1&width=2000&userId=&cache=v2)

## Contexte

Nous venons de terminer l’utilisation et le traitement des formulmaires, et nous allons avec ce seul exercice de cette semaine, devoir utiliser et traiter le formulaire créé par mes soins comme il se doit.

Ainsi, une trame disponible dans le fichier zip ci-dessous est disponible et doit être utilisée afin de réaliser l’exercice suivant :
[on-reformule.zip](on-reformule.zip)


## Les consignes

Sur la base du formulaire fournit ci-dessus, vous allez devoir :

- Effectuer les modifications que vous jugez nécessaires au sein de l’index.html, les mofifications peuvent être esthétiques, fonctionnelles ou encore pistes d’évolution (autrement dit des idées écrites sur papier, ou sur Notion ! ;) )
- Créer un fichier de traitement ; **form.php** ; qui se devra de récupérer les informations du formulaire, le fichier index peut aussi être transformé en ***index.php si vous le désirez***
- Chaque champs récupéré dans le formulaire doit donner lieu à un paragraphe, avec une phrase ou non mais qui ressort la ou les informations validées au submit
- Appliquer au sein du fichier form.php, et dans le cas inverse, annuler l’envoi par l’apparition d’un message d’erreur, les vérifications suivantes :
    - **Le nom** saisi fait au moins une **longueur de 2 caractères**
    - **Le prénom** doit faire **3 caractères** et **ne peut contenir de chiffres**
    - **La date de naissance** doit être vérifiée et notre internaute doit avoir **au moins 28 ans**
    - L’adresse email doit être vérifiée, et l’extension du domaine de l’internaute doit être de l’une de celles-ci :
        - .fr
        - .com
        - .net
        - .org
        - .club
        - .co.uk
    - Il **doit être possible de ne saisir aucun loisir**, dans ce cas, afficher dans le paragraphe la phrase “*Coquin ! Tu ne veux pas nous dire tes petits secrets 😉*”