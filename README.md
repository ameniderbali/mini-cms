## État actuel (tag lab-06b)

- Middleware `admin` (`App\Http\Middleware\EnsureUserIsAdmin`) sur tout `/admin` : un auteur reçoit 403 « Réservé aux administrateurs. ».
- Gate `manage-tags`, comme `manage-categories` : contrôleur, Form Requests et menu.
- Brouillons protégés : `PostPolicy::view` et le scope `visibleTo` ; un brouillon n'est visible que par son auteur et les administrateurs.
- Tests d'autorisation : `AdminAccessTest` (7 tests) et `PostVisibilityTest` (5 tests), en plus des fichiers de la session 11.
- Comparaison écrite avec le starter kit Livewire (section ci-dessous).
### Session 12

![Page 403 « Réservé aux administrateurs. » pour un compte auteur sur /admin/tags](![alt text](image-19.png))

![Barre de navigation d'un compte auteur, sans les liens Catégories et Tags](![alt text](image-20.png))