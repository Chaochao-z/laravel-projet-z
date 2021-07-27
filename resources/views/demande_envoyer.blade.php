<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            RDV-enregistrer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h1>Demande 
                        @if ($appartement->status == "louer")
                            location
                        @else
                            d'achat
                        @endif
                        a été envoyer à notre centre de validation
                    </h1>
                    <div style = "border:solid green;margin:5px;border-radius:20px;padding:20px;">
                        <h2>Merci pour votre confiance</h2>
                        <p>Votre demande sera valider dans les plus brefs delai<p>
                        <p>Reference lot : {{ $appartement->id }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>