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

                    <div class = "tableau-info">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <!-- <th scope="col">ID</th> -->
                                    <th scope="col">Type</th>
                                    <th scope ="col">Pièce</th>
                                    <th scope ="col">Prix</th>
                                    <th scope ="col">Surface</th>
                                    <th scope ="col">Date publication</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>{{ $appartement->type }}</td>
                                <td>{{ $appartement->nb_piece }}</td>
                                <td>{{ $appartement->prix }}</td>
                                <td>{{ $appartement->surface }}</td>
                                <td>{{ $appartement->date_publication }}</td>
                            </tr>
                        </table>


                    </div>
                    <h1 style="text-align:center;margin-bottom:20px;"> Description </h1>
                    <p> {{ $appartement->description }}</p>
                    <div>
                        <h1 style="text-align:center;margin-bottom:20px;">Localisation</h1>

                        <iframe src="{{ $appartement->localisation }}" width="600" height="450" style="border:0;margin:auto;" allowfullscreen="" loading="lazy"></iframe>

                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>