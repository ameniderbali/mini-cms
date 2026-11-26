<x-layout>
    <x-slot:title>Utilisateurs - Mini-CMS</x-slot:title>

    <x-page-header title="Utilisateurs" subtitle="Gérer les rôles des comptes." />

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm bg-white border border-gray-200 rounded">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2">Nom</th>
                    <th class="px-4 py-2">E-mail</th>
                    <th class="px-4 py-2">Rôle</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2">{{ $user->name }}</td>
                        <td class="px-4 py-2">{{ $user->email }}</td>
                        <td class="px-4 py-2">{{ $user->role }}</td>
                        <td class="px-4 py-2">
                            @can('changeRole', $user)
                                <form method="POST" action="{{ route('admin.users.role', $user) }}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="role" value="{{ $user->isAdmin() ? 'author' : 'admin' }}">
                                    <button type="submit" class="text-indigo-600 hover:underline">
                                        {{ $user->isAdmin() ? 'Passer auteur' : 'Passer administrateur' }}
                                    </button>
                                </form>
                            @else
                                <span class="text-gray-500">(vous)</span>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>