<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            welcome FilmShow Page ! 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        <li> Titre de film : {{ $film->titre }} ( {{ $film->duree_minutes }} min Année production: {{ $film->annee_production }} ) </li>
                        <li> Diffusé du {{ $film->date_debut_affiche }} au {{ $film->date_fin_affiche }} </li>
                        <li> Genre : {{ $film->genre->nom }} </li>
                        <li> 
                        @if (!empty($film->distributeur))
                            Distributeur : {{ $film->distributeur->nom }} 
                        @endif</li>
                        <li> Résumé : {{ $film->resum }} </li>

                    </ul>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>