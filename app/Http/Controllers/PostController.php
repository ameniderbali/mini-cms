<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    private function posts(): array
    {
        return [
            'decouvrir-laravel-13' => [
                'slug' => 'decouvrir-laravel-13',
                'title' => 'Découvrir Laravel 13',
                'excerpt' => 'Découvrez les bases de Laravel et la structure de son projet.',
                'author' => 'Ameni Derbali',
                'date' => '15/10/2026',
                'year' => 2026,
                'featured' => true,
                'body' => [
                    'Laravel est un framework PHP qui facilite le développement d’applications web.',
                    'Il propose un système de routage, des contrôleurs et le moteur de templates Blade.',
                    'L’architecture MVC permet de séparer les données, le traitement et la présentation.',
                ],
            ],

            'routes-et-controleurs' => [
                'slug' => 'routes-et-controleurs',
                'title' => 'Routes et contrôleurs',
                'excerpt' => 'Comprenez comment Laravel traite les requêtes HTTP.',
                'author' => 'Ameni Derbali',
                'date' => '14/10/2026',
                'year' => 2026,
                'featured' => false,
                'body' => [
                    'Une route associe une URL à une action de l’application.',
                    'Le contrôleur reçoit la requête, prépare les données et retourne une réponse.',
                ],
            ],

            'premiers-pas-avec-blade' => [
                'slug' => 'premiers-pas-avec-blade',
                'title' => 'Premiers pas avec Blade',
                'excerpt' => 'Apprenez à créer des vues réutilisables avec Blade.',
                'author' => 'Ameni Derbali',
                'date' => '13/10/2026',
                'year' => 2026,
                'featured' => false,
                'body' => [
                    'Blade est le moteur de templates intégré à Laravel.',
                    'Les doubles accolades permettent d’afficher des données tout en échappant le contenu HTML.',
                ],
            ],

            'architecture-mvc' => [
                'slug' => 'architecture-mvc',
                'title' => 'Comprendre l’architecture MVC',
                'excerpt' => 'Découvrez le rôle du modèle, de la vue et du contrôleur.',
                'author' => 'Ameni Derbali',
                'date' => '12/10/2026',
                'year' => 2026,
                'featured' => false,
                'body' => [
                    'MVC signifie Model-View-Controller.',
                    'Le modèle représente les données, la vue gère la présentation et le contrôleur coordonne le traitement.',
                ],
            ],
        ];
    }

    public function index()
    {
        return view('posts.index', [
            'heading' => 'Tous les articles',
            'posts' => $this->posts(),
        ]);
    }

    public function archive(string $year)
    {
        $posts = array_filter(
            $this->posts(),
            fn (array $post) => $post['year'] === (int) $year
        );

        return view('posts.index', [
            'heading' => 'Articles de ' . $year,
            'posts' => $posts,
        ]);
    }

    public function show(string $slug)
    {
        $posts = $this->posts();

        if (! array_key_exists($slug, $posts)) {
            abort(404);
        }

        return view('posts.show', [
            'post' => $posts[$slug],
        ]);
    }
}
