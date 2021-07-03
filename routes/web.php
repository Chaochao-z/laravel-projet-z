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

Route::get('/appartement',[AppartementController::class,'index'])->middleware(['auth']);

require __DIR__.'/auth.php';


