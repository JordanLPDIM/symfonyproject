# Auteur : Jordan Godde

# Fonctionnalités:
    - Création d'un compte
    - Authentification
    - Post d'un tweet
    - Affichage des tweets
    - Design avec Bootstrap
    - Utilisation API OpenWeather pour afficher météo à Calais

# Build le projet:
    - Dans la racine du projet: symfony check:requirements
    - composer install
    - npm install
    - npm install webpack —-save-dev
    - Créer la base de données : 
        - php bin/console doctrine:database:create
        - php bin/console doctrine:schema:update --force

# Lancer le projet:
    - Dans la racine du projet: symfony server:start
    - lien: localhost:8000

# Problèmes rencontrés:
    Je n'ai pas réussi à faire les liaisons clés étrangères entre mes tables avec les classes entity    
    malgrè avoir essayé plusieurs syntaxes,   
    je n'ai pas pu donc faire de fonctionnalités de like ou abonnement.

# Screenshots & Gif:

## Accueil:

![Model](https://github.com/JordanLPDIM/symfonyproject/blob/main/public/assets/img/accueil.png)

## Envoie d'un tweet:

![hippo](https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExODE5Njc1MWEwN2JjNTY4MGU3MTA5NzZiNjY2YzQxMzJjMTM2Yjk4NiZjdD1n/djrda7UsHUPU7LTQXk/giphy.gif)

## Création de compte et connexion: 

![hippo](https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExOTY4Y2Y4ZGM0MjM1ZWNjYWNkZTBiMTYxZmFjNTg1OTVjZjI4YWRmYiZjdD1n/rteHH1XhOBrF74zCJe/giphy.gif)

