<?php

use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\PokedexController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Handle active navbar item
$homeActive = 'active';
$pokedexActive = '';
$aboutActive = '';
if ($_SERVER["SCRIPT_NAME"] == '/index.php') {
    $homeActive = 'active';
}
if ($_SERVER["SCRIPT_NAME"] == '/pokedex.php') {
    $pokedexActive = 'active';
}
if ($_SERVER["SCRIPT_NAME"] == '/about.php') {
    $aboutActive = 'active';
}
View::share('homeActive', $homeActive);
View::share('pokedexActive', $pokedexActive);
View::share('aboutActive', $aboutActive);


Route::get('/', [IndexController::class, 'index']);

Route::get('/details', [DetailsController::class, 'index']);
Route::get('/details/{name}', [DetailsController::class, 'show']);

Route::get('/pokedex', [PokedexController::class, 'index']);

Route::get('/about', function(){
    return view('about');
});