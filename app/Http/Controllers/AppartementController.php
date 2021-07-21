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

    public function create(){
        return view('addappartement');
    }

    public function addappartement(Request $request){
        
    }

}
