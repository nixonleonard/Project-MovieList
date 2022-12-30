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
Route::get('/deletemovie/{movie_id}', [HomeController::class, 'deleteMovie'])->middleware('authAdmin');

Route::get('/actor', [ActorController::class, 'getAllActor']);
Route::get('/actordetail/{actor_id}', [ActorController::class, 'showActorDetail']);
Route::get('/deleteactor/{actor_id}', [ActorController::class, 'deleteActor'])->middleware('authAdmin');

Route::get('/register', [RegisterController::class, 'registerPage']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/logout',[AuthController::class, 'logout']);
// Route::get('/admin', [AuthController::class, 'adminPage'])->middleware('authAdmin');

Route::get('/createmovie', [HomeController::class, 'insertForMovieGenre'])->middleware('authAdmin');
Route::post('/createmovie', [HomeController::class, 'insertMovie']);

Route::get('/createactor', [ActorController::class, 'insertForActorPage'])->middleware('authAdmin');
Route::post('/createactor', [ActorController::class, 'insertActor'])->middleware('authAdmin');
// Route::get('/editactor', [ActorController::class, 'insertActorPage'])->middleware('authAdmin');
Route::get('/editactor/{actor_id}', [ActorController::class, 'showEditActors'])->middleware('authAdmin');
Route::post('/editactor/{actor_id}', [ActorController::class, 'editedActors'])->middleware('authAdmin');

Route::get('/editmovie', function () {
    return view('editMovie');
});

// Route::get('/editactor', function () {
//     return view('editActor');
// });

Route::get('/mywatchlist',[WatchListController::class, 'search'])->middleware('authUser');
Route::post('/mywatchlist',[WatchListController::class, 'search'])->middleware('authUser');


Route::get('/myprofile',[AuthController::class, 'myProfilePage'])->middleware('authLogin');
Route::post('/updateprofile', [AuthController::class, 'updateProfile'])->middleware('authLogin');

// Route::get('/actordetail', function(){
//     return view('actorDetail');
// });

// Route::get('/moviedetail', function(){
//     return view('movieDetail');
// });
