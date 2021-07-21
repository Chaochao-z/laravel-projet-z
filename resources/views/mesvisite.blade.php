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
                                <th scope ="col">Reference Visite</th>
                                <th scope ="col">Lot Appartement</th>
                                <th scope ="col">Adresse</th>
                                <th scope ="col">Date de visite</th>
                            </tr>
                        </thead>    
                        @foreach ($lesvisites as $levisite)
                        <tr>
                            <th scope ="col"> {{ $levisite->id }}</th>
                            <th scope ="col">{{ $levisite->id_appartement }}</th>
                            <th scope ="col">{{ $levisite->adresse }}</th>
                            <th scope ="col">{{ $levisite->date_visite }}</th>
                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
