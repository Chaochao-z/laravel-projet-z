<?php

namespace App\Http\Controllers;
use App\Models\Appartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppartementController extends Controller
{
    //
    public function index(){
        $appartements = Appartement::paginate(50);
        return view('appartement',['appartement' => $appartements]);
    }

    public function addappartement(Request $request){
        $appartements = new Appartement;
        $appartements->type = $request->type;
        $appartements->nb_piece = $request->nb_piece;
        $appartements->localisation = $request->localisation;
        $appartements->etage = $request->etage;
        $appartements->prix = $request->prix;
        $appartements->surface = $request->surface;
        $appartements->description = $request->description;
        $appartements->status = $request->status;
        $appartements->save();
        return redirect('appartement')->with('status', "Ajoute de l&#39;appartement");
    }
}
