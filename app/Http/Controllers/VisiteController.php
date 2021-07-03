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
}

