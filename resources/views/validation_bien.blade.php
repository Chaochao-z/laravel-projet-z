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
                                <th scope ="col">Reference</th>
                                <th scope ="col">Type</th>
                                <th scope ="col">Adresse</th>
                                <th scope ="col">Demandeur</th>
                                <th scope ="col">Demande</th>
                                <th scope ="col">Confirmation</th>
                            </tr>
                        </thead>    
                        @foreach ($appartements as $appartement)
                        <tr>
                            <th scope ="col"> {{ $appartement->id }}</th>
                            <th scope ="col">{{ $appartement->type }}</th>
                            <th scope ="col">{{ $appartement->adresse }}</th>
                            <th scope ="col">{{ $appartement->name }}</th>
                            <th scope ="col">
                            @if ($appartement->status == "louer")
                                Location</th>
                                <th scope ="col" style="color:green;"><a href="/admin/validation-bien/{{ $appartement->id }}">Confirmer Location </a></th>
                                
                            @else
                                Achat Total</th>
                                <th scope ="col" style="color:green;"><a href="/admin/validation-bien/{{ $appartement->id }}">Confirmer Vente </a></th>
                            @endif
                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
