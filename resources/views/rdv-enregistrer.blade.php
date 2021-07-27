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
                    <h1>Rdv enregistrer</h1>
                    <p>Un mail de confirmation vous serez envoyé dans les minutes qui suivent</p>
                    <p>Votre date de RDV est le {{ $date }} . </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>