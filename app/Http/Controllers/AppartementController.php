<?php

namespace App\Http\Controllers;
use App\Models\Appartement;
use App\Models\Image;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

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

    public function edit(Request $request){
        $id_appartement = $request->id;
        $appartement = Appartement::find($id_appartement);
        return view('single-appartement-edit',['appartement' => $appartement]);

    }

    public function update(Request $request){
        $id = $request->id;
        $appartement = Appartement::find($id);
        $appartement->type = $request->type;
        $appartement->etage = $request->etage;
        $appartement->nb_piece = $request->nb_piece;
        $appartement->status = $request->status;
        if (isset($request->surface)){
            $appartement->surface = $request->surface;
        }
        if (isset($request->adresse)){
            $appartement->adresse = $request->adresse;
        }
        if (isset($request->localisation)){
            $appartement->localisation = $request->localisation;
        }
        if (isset($request->description)){
            $appartement->description = $request->description;
        }
        if (isset($request->prix)){
            $appartement->prix = $request->prix;
        }
       
        $appartement->save();
        return view('single-appartement-edit-success',['id' => $id]);
    }

    public function demande(Request $request){
        $appartement = Appartement::find($request->id);
        if($appartement->status == "location"){
            $appartement->status = "louer";
        }
        if($appartement->status == "vente"){
            $appartement->status = "vendu";
        }
        $appartement->id_user = Auth::user()->id;
        $appartement->save();
        return view('demande_envoyer',['appartement' => $appartement]);
    }

    public function validation_liste(){
        $appartements = DB::table('appartements')
                            ->join('users','id_user','=','users.id')
                            ->select('appartements.*','users.name')
                            ->where('id_user',!NULL)
                            ->where('isValide',0)
                            ->get();
        return view('validation_bien',['appartements' => $appartements]);
    }

}
