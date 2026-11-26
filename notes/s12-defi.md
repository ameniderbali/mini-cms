# Session 12 - Défi

1. Pourquoi role n'est-il pas dans #[Fillable], et comment votre contrôleur le modifie-t-il quand même ?

Hors de #[Fillable], role reste protégé même si un contrôleur passe un jour $request->all() ou si une règle role apparaît dans une Form Request. Mon contrôleur affecte l'attribut lui-même ($user->role = ...), à partir d'une valeur validée par la règle in et après la vérification de la policy, puis appelle save().

2. Pourquoi le callback de Gate::before doit-il renvoyer null, et non false, pour un auteur ?

false est une réponse définitive : Laravel refuserait tout à un auteur, même la modification de ses propres articles. null veut dire « pas d'avis » : Laravel continue et interroge le Gate ou la méthode de la Policy concernés.