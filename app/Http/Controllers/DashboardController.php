<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $users = user::paginate(50);
        return view('dashboard',['users' => $users]);
    }
}
