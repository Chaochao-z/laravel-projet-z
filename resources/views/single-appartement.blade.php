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





                        {{ $appartement->type }}
                        {{ $appartement->prix }}
                        {{ $appartement->surface }}
                        {{ $appartement->nb_piece }}
                        {{ $appartement->description }}
                        {{ $appartement->type }}
                        {{ $appartement->type }}
                    </div>
                    
                </div>
                    
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8926.714626305667!2d2.4473402749630204!3d48.83899815918653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ca1be18b1bb%3A0x8b17f88425397615!2sEvasion%20Verte!5e0!3m2!1sfr!2sfr!4v1625419559112!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            </div>
        </div>
    </div>
</x-app-layout>