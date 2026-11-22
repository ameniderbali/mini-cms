# Session 11 - Défi

/mes-articles ne montre que mes articles, brouillons compris : oui
Un visiteur qui ouvre /mes-articles arrive sur /connexion : oui
Le cookie remember_web_ apparaît quand la case est cochée : oui
Les deux nouveaux tests passent et php artisan test est vert : non (à corriger après les tests Post*Test)

Pourquoi partir de $request->user()->posts() plutôt que de Post::where('user_id', $request->user()->id) ?
La relation porte déjà la bonne condition : elle ne vise que les articles de l'utilisateur de la session, et aucun champ de formulaire ni paramètre d'adresse ne peut la diriger vers un autre utilisateur.

Pourquoi la case remember ne doit-elle pas être dans le tableau passé à Auth::attempt() ?
attempt() ajoute chaque clé du tableau à la recherche de l'utilisateur, sauf le mot de passe : il chercherait une colonne remember dans la table users. Comme elle n'existe pas, la page affiche une erreur SQL (no such column: remember) au lieu de connecter l'utilisateur.