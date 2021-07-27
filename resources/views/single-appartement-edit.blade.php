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

                        <form action="/appartement-edit/single" method="post">
                          
                            @csrf
                            <label>ID Appartement</label>
                            <select name ="id">
                                <option value=<?php echo $appartement->id; ?>><?php echo $appartement->id; ?></option>
                            </select>
                           
                            <label>Type</label>
                            <select name="type">
                                <option value="appartement">Appartement</option>
                                <option value="maison" <?php if($appartement->type == "maison"){ echo "Selected" ; } ?> >Maison</option>
                            </select>
                            <label>Nombre de pièce</label>
                            <select name="nb_piece">
                            <?php for($i=1 ; $i<=150 ; $i++){
                                    if ($appartement->nb_piece == $i){
                                        echo "<option value=$i selected>$i</option>";
                                    }
                                    else{ 
                                    echo "<option value=$i>$i</option>";}
                                } ?>
                            </select>
                            <label>Etage</label>
                            <select name="etage">
                                <?php for($i=1 ; $i<=150 ; $i++){
                                    if ($appartement->etage == $i){
                                        echo "<option value=$i selected>$i</option>";
                                    }
                                    else{ 
                                    echo "<option value=$i>$i</option>";}
                                } ?>
                            <select>
                            <label>Status
                            <select name="status">
                                <option value="vente">Vente</option>
                                <option value="location" <?php if($appartement->status == "location"){ echo "Selected" ; } ?>>location</option>
                            </select></label>
                            <label>Prix</label>
                            <input type="number" max="1000000000" name="prix"  placeholder=<?php echo $appartement->prix; ?>>
                            <label>Surface m²</label>
                            <input type="number" max="100000" name="surface"  placeholder=<?php echo $appartement->surface ;?>> 
                            <label>Adresse</label>
                            <input type="text" name="adresse"  placeholder=<?php echo $appartement->adresse ; ?>>
                            <label>localisation (Facultatif)</label>
                            <input type="text" name="localisation" placeholder=<?php echo $appartement->localisation; ?>>

                            <label>Images</label>
                            <input type="file" name="images" accept="image/*" multiple>

                            <label>Description
                            <input type="text" name="description"  placeholder=<?php echo $appartement->description; ?>></label>
                            <input type="submit">

                   
                        </form>
                    </div>
                </div>
                    
            </div>
            
        </div>
    </div>
   
</x-app-layout>