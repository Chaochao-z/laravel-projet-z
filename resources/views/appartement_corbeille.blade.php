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
                                <th scope="col">Réference</th>
                                <th scope="col">Type</th>
                                <th scope ="col" > nb_piece</th>
                                <th scope ="col">Prix</th>
                                <th scope ="col">Surface</th>
                                <th scope ="col">Status</th>
                                <th scope ="col">Date publication</th>
                                <th scope ="col" >Restaure</th>
                                <th scope ="col" >Supprimer Définitivement</th>

                            </tr>
                        </thead>    
                        @foreach ($appartements as $appartement)
                        <tr>
                            <!-- <td>    {{ $appartement->id }} </td> -->
                            <td>    {{ $appartement->id }}</td>
                            <td>    {{ $appartement->type }}</td>
                            <td>    T{{ $appartement->nb_piece }}</td>
                            <td>    {{ $appartement->prix }}</td>
                            <td>    {{ $appartement->surface }}</td>
                            <td>    {{ $appartement->status }}</td>
                            <td>    {{ $appartement->date_publication }}</td>
                            <td><a href="/visite-restaure/{{ $appartement->id }}">Restaure</a>
                            <td><a href="/visite-delete/{{ $appartement->id }}">Delete</a>
                        </tr>
                        @endforeach
                    </table>
   
                    <button><a href="/visite">Retourner</a></button>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
