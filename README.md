# Mini-CMS

Projet fil rouge de l’Atelier Framework Côté Serveur — Laravel 13, 3e année Licence Développement Web et Multimédia, ISET Sidi Bouzid.

**Auteur :** Derbali Ameni  
**Groupe :** MDW32

## Présentation

Mini-CMS est une petite application de publication développée progressivement avec Laravel. Le projet permet de découvrir le routage, les contrôleurs, les vues Blade et les composants réutilisables.

Les articles sont actuellement stockés dans un tableau PHP. Aucune base de données n’est nécessaire pour afficher les pages et les articles dans cette version.

## État actuel — lab-02

- Routes nommées et contrôleurs `PageController` et `PostController`.
- Pages publiques : accueil, à propos et heure.
- Liste, détail et archives des articles.
- Vues Blade avec un layout réutilisable `<x-layout>`.
- Composants Blade, dont les cartes d’articles et les alertes.
- Tailwind CSS compilé avec Vite.
- Base de données SQLite locale pour les prochaines évolutions.

## Routes disponibles

| Méthode | URI | Nom | Action |
|---|---|---|---|
| GET | `/` | `home` | `PageController@home` |
| GET | `/a-propos` | `about` | `PageController@about` |
| GET | `/heure` | `time` | `PageController@time` |
| GET | `/posts` | `posts.index` | `PostController@index` |
| GET | `/posts/archive/{year}` | `posts.archive` | `PostController@archive` |
| GET | `/posts/{slug}` | `posts.show` | `PostController@show` |

La route de détail utilise un slug. Un article inexistant doit retourner une erreur HTTP 404.

## Prérequis

- PHP 8.3 ou supérieur, avec les extensions requises par Laravel.
- Composer.
- Node.js LTS et npm.
- Git.

## Installation sous Windows — PowerShell

Cloner le dépôt :

```powershell
git clone https://github.com/ameniderbali/mini-cms.git
cd mini-cms
```

Installer les dépendances PHP et JavaScript :

```powershell
composer install
npm install
```

Préparer la configuration :

```powershell
copy .env.example .env
php artisan key:generate
```

Créer le fichier SQLite s’il n’existe pas :

```powershell
if (!(Test-Path database\database.sqlite)) {
    New-Item database\database.sqlite -ItemType File
}
```

Vérifier que `.env` contient une configuration SQLite adaptée, notamment :

```dotenv
DB_CONNECTION=sqlite
```

Lancer les migrations :

```powershell
php artisan migrate
```

Démarrer l’application et Vite :

```powershell
composer run dev
```

Ouvrir ensuite [http://localhost:8000](http://localhost:8000).

## Installation sous Bash — Git Bash, macOS ou Linux

```bash
git clone https://github.com/ameniderbali/mini-cms.git
cd mini-cms

composer install
npm install

cp .env.example .env
php artisan key:generate

touch database/database.sqlite
php artisan migrate

composer run dev
```

Vérifier également que `.env` utilise SQLite avec `DB_CONNECTION=sqlite`.

## Captures d’écran

Place les captures dans un dossier `screenshots/` à la racine du projet, puis utilise les chemins correspondants ci-dessous.

### Accueil avec le layout

![Page d’accueil](![alt text](image-6.png))

### Liste des articles

![Liste des articles](![alt text](image-7.png))

### Détail d’un article

![Détail d’un article — capture 1](![alt text](image-8.png))

![Détail d’un article — capture 2](![alt text](image-9.png))

![Détail d’un article — capture 3](![alt text](image-10.png))

![Détail d’un article — capture 3](![alt text](image-11.png))
## Évolutions prévues

- Gestion des articles en base de données.
- Back-office avec authentification.
- API JSON.
- Tests automatisés avec Pest.

## Technologies

PHP · Laravel · Blade · Tailwind CSS · Vite · SQLite · Git
