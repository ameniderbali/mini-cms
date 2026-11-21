<x-layout>
    <x-slot:title>Catégorie introuvable - Mini-CMS</x-slot:title>

    <h1 class="mb-2 text-3xl font-bold text-gray-900">Catégorie introuvable</h1>
    <p class="mb-6 text-gray-600">Cette catégorie n'existe pas ou a été supprimée.</p>

    <x-alert type="info" title="Que faire ?" class="max-w-2xl">
        Vérifiez l'adresse, ou choisissez l'une des catégories ci-dessous.
    </x-alert>

    @if ($categories->isNotEmpty())
        <h2 class="mt-10 mb-4 text-xl font-semibold">Catégories</h2>

        <ul class="list-disc space-y-2 pl-6">
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('posts.category', $category) }}" class="font-medium text-indigo-600 hover:underline">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif

    <p class="mt-6">
        <a href="{{ route('posts.index') }}" class="font-medium text-indigo-600 hover:underline">Voir tous les articles</a>
    </p>
</x-layout>