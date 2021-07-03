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
                                <th scope="col">ID</th>
                                <th scope="col">Type</th>
                                <th scope ="col" > nb_piece</th>
                                <th scope ="col">localisation</th>
                                <th scope ="col">Prix</th>
                                <th scope ="col">Surface</th>
                                <th scope ="col">Description</th>
                                <th scope ="col">Status</th>
                                <th scope ="col">Date publication</th>
                                <th scope ="col">Date location</th>
                                <th scope ="col">ID user</th>
                                <th scope ="col" >Action</th>
                            </tr>
                        </thead>    
                        @foreach ($appartements as $appartement)
                        <tr class="table-primary">
                            <td>    {{ $appartement->id }} </td>
                            <td>    {{ $appartement->type }}</td>
                            <td>    {{ $appartement->nb_piece }}</td>
                            <td>    {{ $appartement->localisation }}</td>
                            <td>    {{ $appartement->prix }}</td>
                            <td>    {{ $appartement->surface }}</td>
                            <td>    {{ $appartement->description }}</td>
                            <td>    {{ $appartement->status }}</td>
                            <td>    {{ $appartement->date_publication }}</td>
                            <td>    {{ $appartement->date_location }}</td>
                            <td>    {{ $appartement->id_user }}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
