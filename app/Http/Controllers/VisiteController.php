<?php

namespace App\Http\Controllers;

use App\Models\Appartement;

use App\Models\Image;

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
            view('rdv-visite',['$id' => $id_appartement])
        );
    }
}

