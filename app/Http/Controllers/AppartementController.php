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

    public function addappartement(){
        $appartements = new Appartement;
        $appartements->content = $request->content;
        $appartements->user_id = Auth::id();
        $appartements->save();
        return view('addappartement',['addappartement' => $appartements]);
    }
}
