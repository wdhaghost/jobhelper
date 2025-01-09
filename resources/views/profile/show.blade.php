<x-layout>
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Détails du Profil</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <!-- Nom -->
        <div class="mb-4">
            <h2 class="text-sm font-medium text-gray-700">Nom</h2>
            <p class="text-gray-800 text-lg font-semibold">{{ $profile->lastname }}</p>
        </div>

        <!-- Prénom -->
        <div class="mb-4">
            <h2 class="text-sm font-medium text-gray-700">Prénom</h2>
            <p class="text-gray-800 text-lg font-semibold">{{ $profile->firstname }}</p>
        </div>

        <!-- Poste recherché -->
        <div class="mb-4">
            <h2 class="text-sm font-medium text-gray-700">Poste recherché</h2>
            <p class="text-gray-800 text-lg font-semibold">{{ $profile->job }}</p>
        </div>

        <!-- Compétences -->
        <div class="mb-4">
            <h2 class="text-sm font-medium text-gray-700">Compétences</h2>
            <p class="text-gray-800 text-lg">{{ $profile->skills }}</p>
        </div>

        <!-- Expériences -->
        <div class="mb-4">
            <h2 class="text-sm font-medium text-gray-700">Expériences</h2>
            <p class="text-gray-800 text-lg">{{ $profile->experiences }}</p>
        </div>

        <!-- Actions -->
        <div class="flex justify-end mt-6">
            <a href="{{ route('profiles.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 mr-2">
                Retour
            </a>
            <a href="{{ route('profiles.edit', $profile) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 mr-2">
                Modifier
            </a>
            <form action="{{ route('profiles.destroy', $profile) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
</x-layout>
