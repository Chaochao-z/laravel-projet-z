<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajout appartment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1> Add your appartment </h1>
                    <form action="/appartement/register" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Type</label>
                        <select name="type">
                            <option value="appartement">Appartement</option>
                            <option value="maison">Maison</option>
                        </select>
                        <label>Nombre de pièce</label>
                        <select name="nb_piece">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                        </select>
                        <label>Etage</label>
                        <select name="etage">
                            <?php for($i=1 ; $i<=150 ; $i++){
                                echo "<option value=$i>$i</option>";
                            } ?>
                        <select>
                        <label>Status
                        <select name="status">
                            <option value="vente">Vente</option>
                            <option value="location">location</option>
                        </select></label>
                        <label>Prix</label>
                        <input type="number" max="1000000000" name="prix" required>
                        <label>Surface m²</label>
                        <input type="number" max="100000" name="surface" required>
                        <label>Adresse</label>
                        <input type="text" name="adresse" required>
                        <label>localisation (Facultatif)</label>
                        <input type="text" name="localisation" >

                        <label>Images</label>
                        <input type="file" name="images" accept="image/*" multiple>

                        <label>Description
                        <input type="text" name="description" required></label>
                        <input type="submit">

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
