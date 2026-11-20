# Session 09 - Défi

Le bandeau s'affiche sur toutes les pages quand SITE_READ_ONLY=true : oui / non
Le bandeau disparaît quand SITE_READ_ONLY=false : oui / non
La page Article introuvable propose au plus trois articles publiés, sans brouillon : oui / non
Aucune LazyLoadingViolationException sur /posts/999 : oui / non
Les deux nouveaux tests passent et php artisan test est vert : oui / non

Pourquoi le bandeau est-il dans le layout et pas dans chaque vue ?
Pourquoi le test du bandeau n'a-t-il pas besoin de modifier .env ?