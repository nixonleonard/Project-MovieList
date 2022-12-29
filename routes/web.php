<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WatchListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'getMovieGenre']);

Route::get('/genre/{genre_id}', [HomeController::class, 'getMoviesFromGenre']);

Route::get('/moviedetail/{movie_id}', [HomeController::class, 'showMovieDetail']);
Route::get('/deletemovie/{movie_id}', [HomeController::class, 'deleteMovie']);

Route::get('/actor', [ActorController::class, 'getAllActor']);
Route::get('/actordetail/{actor_id}', [ActorController::class, 'showActorDetail']);
Route::get('/deleteactor/{actor_id}', [ActorController::class, 'deleteActor']);

Route::get('/register', [RegisterController::class, 'registerPage']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/logout',[AuthController::class, 'logout']);
Route::get('/admin', [AuthController::class, 'adminPage'])->middleware('security');

Route::get('/createmovie', [RegisterController::class, 'showGenre']);
// Route::post('/register', [RegisterController::class, 'register']);

Route::get('/createactor', [ActorController::class, 'insertActorPage']);
Route::post('/createactor', [ActorController::class, 'insertActor']);

Route::get('/editmovie', function () {
    return view('editMovie');
});

Route::get('/editactor', function () {
    return view('editActor');
});

Route::get('/mywatchlist',[WatchListController::class, 'search']);
Route::post('/mywatchlist',[WatchListController::class, 'search']);


Route::get('/myprofile', function(){
    return view('profilePage');
});

Route::get('/actordetail', function(){
    return view('actorDetail');
});

Route::get('/moviedetail', function(){
    return view('movieDetail');
});
