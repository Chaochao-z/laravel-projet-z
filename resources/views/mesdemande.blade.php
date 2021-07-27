<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            welcome on the appartement !
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!-- <th scope="col">ID</th> -->
                                <th scope ="col">Reference Lot</th>
                                <th scope ="col">Adresse</th>
                                <th scope ="col">Status</th>
                                <th scope ="col">Prix</th>
                                <th scope ="col">Demande</th>
                            </tr>
                        </thead>    
                        @foreach ($mesdemandes as $demande)
                            <tr>
                                <th scope ="col"> {{ $demande->id }}</th>
                                <th scope ="col">{{ $demande->adresse }}</th>
                                @if ($demande->status == "louer")
                                    <th scope ="col">Location</th>
                                @elseif ($demande->status == "vendu")
                                    <th scope ="col">Achat</th>
                                @endif
                                <th scope ="col">{{ $demande->prix }}</th>

                                @if ($demande->isValide == 0)
                                    <th scope ="col" style="color:red;">En Attente de validation</th>
                                @else 
                                    <th scope ="col" style="color:green;">Validée</th>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
