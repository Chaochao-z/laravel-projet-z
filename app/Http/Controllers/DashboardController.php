<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        $users = user::paginate(50);
        $id = Auth::user()->id;
        $mesappartements = DB::table('appartements')->where('id_user',$id)->get();
        // $mesappartements = DB::table('appartements')
        //                 ->join('images','appartements.id','=','images.id_appartement')
        //                 ->select('appartements.*','images.*')
        //                 ->where('appartements.id_user',$id)
        //                 ->get();
        return view('dashboard',['users' => $users,'mesappartements' => $mesappartements]);
    }
}
