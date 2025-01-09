<x-layout>
    
    <div class="container mx-auto p-6">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Liste des Profils</h1>
        <a href="{{ route('profiles.create') }}" class="px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded shadow hover:bg-blue-600">
            Ajouter un Profil
        </a>
    </div>

    <!-- Profiles Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 bg-gray-50 text-gray-800 text-left text-sm uppercase font-medium">
                        Nom
                    </th>
                    <th class="px-5 py-3 bg-gray-50 text-gray-800 text-left text-sm uppercase font-medium">
                        Prénom
                    </th>
                    <th class="px-5 py-3 bg-gray-50 text-gray-800 text-left text-sm uppercase font-medium">
                        Poste Recherché
                    </th>
                    <th class="px-5 py-3 bg-gray-50 text-gray-800 text-left text-sm uppercase font-medium">
                        Compétences
                    </th>
                    <th class="px-5 py-3 bg-gray-50 text-gray-800 text-left text-sm uppercase font-medium">
                        Expériences
                    </th>
                    <th class="px-5 py-3 bg-gray-50 text-gray-800 text-left text-sm uppercase font-medium">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profiles as $profile)
                    <tr class="border-b">
                        <td class="px-5 py-3 text-sm text-gray-800">
                            {{ $profile->lastname }}
                        </td>
                        <td class="px-5 py-3 text-sm text-gray-800">
                            {{ $profile->firstname }}
                        </td>
                        <td class="px-5 py-3 text-sm text-gray-800">
                            {{ $profile->job }}
                        </td>
                        <td class="px-5 py-3 text-sm text-gray-800">
                            {{ $profile->skills }}
                        </td>
                        <td class="px-5 py-3 text-sm text-gray-800">
                            {{ $profile->experiences }}
                        </td>
                        <td class="px-5 py-3 text-sm text-gray-800">
                            <div class="flex space-x-2">
                                <a href="{{ route('profiles.show', $profile) }}" class="px-3 py-1 bg-green-500 text-white text-xs font-medium rounded hover:bg-green-600">
                                    Voir
                                </a>
                                <a href="{{ route('profiles.edit', $profile) }}" class="px-3 py-1 bg-yellow-500 text-white text-xs font-medium rounded hover:bg-yellow-600">
                                    Modifier
                                </a>
                                <form action="{{ route('profiles.destroy', $profile) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 text-white text-xs font-medium rounded hover:bg-red-600">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-5 py-3 text-center text-gray-500 text-sm">
                            Aucun profil trouvé.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
</x-layout>