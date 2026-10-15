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
                'year' => 2026,
                'featured' => true,
                'body' => 'Laravel 13 simplifie la structure du projet : la configuration des middlewares et des exceptions se fait dans bootstrap/app.php.',
            ],

            'routes-et-controleurs' => [
                'slug' => 'routes-et-controleurs',
                'title' => 'Routes et contrôleurs',
                'year' => 2026,
                'featured' => false,
                'body' => 'Une route associe une URL à une méthode de contrôleur. Le contrôleur prépare les données, la vue les affiche.',
            ],

            'premiers-pas-avec-blade' => [
    'slug' => 'premiers-pas-avec-blade',
    'title' => 'Premiers pas avec Blade',
    'year' => 2026,
    'featured' => false,
    'body' => 'Blade est le moteur de vues de Laravel. Les doubles accolades échappent toujours le contenu affiché.',
],

            'architecture-mvc' => [
                'slug' => 'architecture-mvc',
                'title' => 'Comprendre l’architecture MVC',
                'year' => 2026,
                'featured' => false,
                'body' => 'Le modèle MVC sépare les données, le traitement et la présentation.',
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