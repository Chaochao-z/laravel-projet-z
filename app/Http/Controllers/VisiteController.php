<?php

namespace App\Http\Controllers;

use App\Models\Appartement;

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
        $appartement = Appartement::find($id_appartement);
        return(
            view('single-appartement', ['appartement' => $appartement])
        );
    }
}

