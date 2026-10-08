# Session 02 - Git et GitHub

Réponses rédigées avec mes propres mots, puis comparées au corrigé de la page.

## 1. Index et commit

Réponse :git add (du répertoire de travail vers l'index), git commit (de l'index vers le dépôt local) ; git push envoie ensuite au dépôt distant.

## 2. Branche et tag

Réponse :Une branche avance à chaque commit ; un tag reste fixé sur un commit (lab-01 désigne toujours la fin de la session 01).

## 3. Le fichier .env

Réponse :.env contient APP_KEY et les réglages propres au poste (et des secrets en production). On copie .env.example puis on lance php artisan key:generate.

## 4. Le dossier vendor/

Réponse :vendor/ est volumineux et entièrement généré ; composer install le reconstruit avec les versions exactes de composer.lock.

## 5. Git Credential Manager

Réponse :Dans le Gestionnaire d'identification Windows (entrée git:https://github.com). On le supprime sur un poste de l'université, car la personne suivante pourrait pousser en votre nom ; on le garde sur son ordinateur personnel.git config --local user.name
git config --local user.email
git branch --show-current
git tag
git log --oneline --decorate
git status
## 6. Historique depuis lab-01

Nombre de commits depuis lab-01 :

Fichiers modifiés depuis lab-01 :

Ce que git tag -n affiche pour lab-01 :