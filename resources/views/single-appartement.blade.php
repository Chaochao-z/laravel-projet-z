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
                    
                    <div class="slideshow-container">
                        @foreach ($images as $image)
                            <div class="mySlides fade">
                               <img src="{{ asset($image->image_url) }}" alt="job image" style="width:100%; height:500px;">
                            </div>
                        @endforeach
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                    @foreach ($images as $key => $image)
                        <span class="dot" onclick="currentSlide({{ $loop->iteration }})"></span>
                    @endforeach
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
                    <h1 style="text-align:center;margin-bottom:20px;"> Description </h1>
                    <p> {{ $appartement->description }}</p>
                    <div>
                        <h1 style="text-align:center;margin-bottom:20px;">Localisation</h1>

                        <iframe src="{{ asset($appartement->localisation) }}" width="600" height="450" style="border:0;margin:auto;" allowfullscreen="" loading="lazy"></iframe>
            
                    </div>
                    <button type="button" class="bouton-visite" name="bouton-visite"><a href="/visite/{{ $appartement->id}}/rdv">Choisir Date de visite</a></button>

                </div>
                    
            </div>
            
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
</x-app-layout>