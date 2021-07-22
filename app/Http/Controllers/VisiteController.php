<?php

namespace App\Http\Controllers;

use App\Models\Appartement;

use Auth;

use App\Models\Image;

use App\Models\Visite;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VisiteController extends Controller
{
    public function index(){
        $appartements = DB::table('appartements')->where('type', 'appartement')->get();
        return(
            view('appartement',['appartements' => $appartements])
        );
    }
    public function appartement_show(Request $request){
        $id_appartement = $request->id;
        $img_appartement = DB::table('images')->where('id_appartement', $id_appartement)->get();
        $appartement = Appartement::find($id_appartement);
        return(
            view('single-appartement', [
                'images' => $img_appartement,
                'appartement' => $appartement
                ])
        );
    }

    public function rdv(Request $request){
        $id_appartement = $request->id;
        return(
            view('rdv-visite',['id' => $id_appartement])
        );
    }

    public function rdv_enregistrer(Request $request){
        $visite = $request->date_rdv;
        $id_appartement = $request->id_appartement;
        $id = Auth::user()->id;
        $rdv = Visite::create([
            'id_user' => $id,
            'id_appartement' => $id_appartement,
            'date_visite' => $visite,
        ]);
        $rdv->save();
        return (
            view('rdv-enregistrer',['date' => $visite])
        );

    }

    public function mesvisite(){
        $id = Auth::user()->id;
        // $lesvisites = Visite::with('appartements')->where('id_user', $id)->get();
        $lesvisites = DB::table('visites')
                        ->join('appartements','id_appartement','=','appartements.id')
                        ->select('visites.*','appartements.adresse')
                        ->get();
        
        return view('mesvisite',['lesvisites' => $lesvisites]);

    }
}

