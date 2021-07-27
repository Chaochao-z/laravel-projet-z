<?php

namespace App\Http\Controllers;
use App\Models\Film;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function index(){
        $films = Film::paginate(50);
        return view('film',['films' => $films]);
    }

    public function filmshow(Request $request){
        $id_film = $request->id_film;
        $film = Film::find($id_film);

        return view('filmshow',['film' => $film]);

    }
}