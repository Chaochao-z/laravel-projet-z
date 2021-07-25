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
                    <p>Filtrer</p>
                    <form action="" method="get">
                        <label>Type</label>
                        <select name="type">
                            <option value=1>Tout</option>
                            <option value=2>Appartement</option>
                            <option value=3>Maison</option>
                        </select>
                        <label>Status</label>
                        <select name="status">
                            <option value=1>Tout</option>
                            <option value=2>Vente</option>
                            <option value=3>Location</option>
                        </select>
                        <button type="submit">Submit</button>

                    </form>
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
                                <th scope ="col">Demande</th>
                                <th scope ="col" >Action</th>
                                @if (Auth::user()->Role == 0)
                                    <th scope ="col" >Admin</th>
                                    <th scope ="col" >Mettre Corbeille</th>
                                @endif

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
                            <td><a href="appartement/demande/{{ $appartement->id }}"> 
                                @if ($appartement->status == "location")
                                    Louer
                                @else
                                    Acheter
                                @endif
                            </a></td>
                            <td><a href="/visite/{{ $appartement->id}}">Regarder</a></td>
                            @if (Auth::user()->Role == 0)
                                <td><a href="/appartement-edit/{{ $appartement->id}}">Edit</a></td>
                                <td><a href="/appartement/corbeille/{{ $appartement->id}}">Retirer</a></td>
                            @endif
                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
