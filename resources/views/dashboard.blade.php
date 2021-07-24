<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome {{ Auth::user()->name }}
                    
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 style="text-align:center;">Mes Appartement</h1>
                    
                </div>
            </div>
        </div>
    </div>
    @if (isset($mesappartements))
        @foreach ($mesappartements as $appartement)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div style="margin-bottom: 100px;">
                                <div class="centerboridehi">
                                    <h1 style="text-align:center;margin-bottom:40px;">
                                        @if($appartement->type =="appartement")
                                            Appartement
                                        @else
                                            Maison
                                        @endif
                                        Lot N° {{ $appartement->id }} </h1>
                                </div>
                            </div>
                            @if ($appartement->isValide == 1)
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
                                            <td>T{{ $appartement->nb_piece }}</td>
                                            <td>{{ $appartement->prix }}€</td>
                                            <td>{{ $appartement->surface }}m²</td>
                                            <td>{{ $appartement->date_publication }}</td>
                                        </tr>
                                    </table>


                                </div>
                                <center>
                                    <h1 style="text-align:center;margin-bottom:20px;"> Description </h1>
                                    <p> {{ $appartement->description }}</p>
                                    <div>
                                        <h1 style="text-align:center;margin-bottom:20px;">Localisation</h1>
                                        <p> {{ ($appartement->adresse )}} <p>

                                        <iframe src="{{ asset($appartement->localisation) }}" width="600" height="450" style="border:0;margin:auto;" allowfullscreen="" loading="lazy"></iframe>
                            
                                    </div>
                                </center>
                            @else
                                <h1>Appartement en attente de validation par l'administrateur</h1>
                            @endif   
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h3>Vous avez pas encore d'appartement ou maison</h3>     
    @endif 
</x-app-layout>
