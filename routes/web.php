<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AppartementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VisiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*//*
Route::get('/film', [FilmController::class,'index'])->middleware(['auth']);

Route::get('/filmshow/{id_film}', [FilmController::class,'filmshow'])->middleware(['auth']);

Route::get('/wall', [WallController::class,'index'])->middleware(['auth']);

Route::post('/postWall', [WallController::class,'save'])->middleware(['auth'])->name('postWall');

Route::get('/delete/{post_id}', [WallController::class,'delete'])->middleware(['auth'])->name('delete');

Route::get('/update/{post_id}', [WallController::class,'update'])->middleware(['auth'])->name('update');

Route::post('/update', [WallController::class,'store'])->middleware(['auth'])->name('store');
*/

Route::get('/visite/{id}', [VisiteController::class,'appartement_show'])->middleware(['auth']);

Route::get('/visite/{id}/rdv', [VisiteController::class,'rdv'])->middleware(['auth']);

Route::post('visite/rdv-enregistrer', [VisiteController::class,'rdv_enregistrer'])->middleware(['auth']);

Route::get('/test', function () {
    echo "test";
})->middleware(['auth']);

Route::get('/plop/{param}',function($param){
    echo '<b>plop : '.$param.'</b>';
});

Route::get('/hello/{username?}', function ($username = NULL) {
    return view('hello',['username' => $username]);
})->middleware(['auth']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/visite', [VisiteController::class,'index'])->middleware(['auth'])->name('visite');

Route::get('/mesvisite', [VisiteController::class,'mesvisite'])->middleware(['auth'])->name('mesvisite');

Route::get('/appartement',[AppartementController::class,'index'])->middleware(['auth'])->name('appartement');

Route::get('/addappartement', [AppartementController::class,'create'])->middleware(['auth'])->name('addappartement');


require __DIR__.'/auth.php';


