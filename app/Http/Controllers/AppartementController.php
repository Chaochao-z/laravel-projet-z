<?php

namespace App\Http\Controllers;
use App\Models\Appartement;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppartementController extends Controller
{
    //
    public function index(){
        $appartements = Appartement::paginate(50);
        return view('appartement',['appartement' => $appartements]);
    }

    public function create(){
        return view('addappartement');
    }

    public function uploadimage($files){
        $basename= basename($files['images']['name']);
        move_uploaded_file($files['images']['tmp_name'], "./images/$basename");
    }

    public function addappartement(Request $request){
        
        $appartement = Appartement::create([
            'type' => $request->type,
           'nb_piece' => $request->nb_piece,
            'etage' => $request->etage,
            'localisation' => $request->localisation,
            'prix' => $request->prix,
            'description' => $request->description,
            'surface' => $request->surface,
            'description' =>$request->description,
            'status' => $request->status,
            'adresse' => $request->adresse,
        ]);
        $appartement->save();
        $appartement = Appartement::latest('id')->first();
        $basename= basename($_FILES['images']['name']);
        $image = Image::create([
            'id_appartement' => $appartement->id,
            'image_url' => "./images/$basename",
        ]);
        $image->save();
        $this->uploadimage($_FILES);
        return view('addappartement-succes');
    }

}
