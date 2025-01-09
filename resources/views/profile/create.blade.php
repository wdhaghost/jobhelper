<x-layout>
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Créer un Profil</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('profiles.store') }}" method="POST">
            @csrf

            <!-- Poste recherché -->
            <div class="mb-4">
                <label for="lastname" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" id="lastname" name="lastname" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Exemple : Dupont" value="{{ old('lastname') }}" required>
                @error('lastname')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="firstname" class="block text-sm font-medium text-gray-700">Prénom</label>
                <input type="text" id="firstname" name="firstname" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Exemple : Gary" value="{{ old('firstname') }}" required>
                @error('firstname')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="job" class="block text-sm font-medium text-gray-700">Poste recherché</label>
                <input type="text" id="job" name="job" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Exemple : Développeur Web" value="{{ old('job') }}" required>
                @error('job')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Compétences -->
            <div class="mb-4">
                <label for="skills" class="block text-sm font-medium text-gray-700">Compétences</label>
                <textarea id="skills" name="skills" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    rows="3" placeholder="Exemple : PHP, Laravel, JavaScript">{{ old('skills') }}</textarea>
                @error('skills')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Expériences -->
            <div class="mb-4">
                <label for="experiences" class="block text-sm font-medium text-gray-700">Expériences</label>
                <textarea id="experiences" name="experiences" 
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    rows="4" placeholder="Exemple : 2 ans en développement full-stack">{{ old('experiences') }}</textarea>
                @error('experiences')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Boutons -->
            <div class="flex justify-end">
                <a href="{{ route('profiles.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 mr-2">
                    Annuler
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</x-layout>