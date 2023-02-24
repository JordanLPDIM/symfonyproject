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
        - php bin/console make:migration
        - php bin/console doctrine:migrations:migrate

# Lancer le projet:
    - Dans la racine du projet: symfony server:start
    - lien: localhost:8000

