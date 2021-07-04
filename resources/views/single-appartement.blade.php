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
                    <div class="centerboridehi">
                        <h1 style="text-align:center;margin-bottom:40px;">
                        @if($appartement->type =="appartement")
                            Appartement
                        @else 
                            Maison
                        @endif
                        Lot N° {{ $appartement->id }} </h1>
                    </div>

                    <ul>
                    {{ $appartement->type }}
                    {{ $appartement->prix }}
                    {{ $appartement->surface }}
                    {{ $appartement->nb_piece }}
                    {{ $appartement->description }}
                    {{ $appartement->type }}
                    {{ $appartement->type }}
                    
                    </ul>
                </div>
                    
    
            </div>
        </div>
    </div>
</x-app-layout>