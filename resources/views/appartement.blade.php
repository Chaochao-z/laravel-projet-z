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
                    <ul>
                        <tr>
                            <td>ID</td>
                            <td>Type</td>
                            <td>nb_piece</td>
                            <td>localisation</td>
                            <td>Prix</td>
                            <td>Surface</td>
                            <td>Description</td>
                            <td>Status</td>
                            <td>Date publication</td>
                            <td>Date location</td>
                            <td>ID user</td>
                            <th >Action</th>
                        </tr>
                        @foreach ($appartements as $appartement)
                        <li>
                            {{ $appartement->id }}
                            {{ $appartement->type }}
                            {{ $appartement->nb_piece }}
                            {{ $appartement->locatisation }}
                            {{ $appartement->prix }}
                            {{ $appartement->surface }}
                            {{ $appartement->description }}
                            {{ $appartement->status }}
                            {{ $appartement->date_publication }}
                            {{ $appartement->date_location }}
                            {{ $appartement->id_user }}
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
