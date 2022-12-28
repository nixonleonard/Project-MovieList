<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
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

Route::get('/home', [HomeController::class, 'getAllMovie']);

Route::get('/register', [RegisterController::class, 'registerPage']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/logout',[AuthController::class, 'logout']);
Route::get('/admin', [AuthController::class, 'adminPage'])->middleware('security');

Route::get('/createmovie', function () {
    return view('createMovie');
});

Route::get('/editmovie', function () {
    return view('editMovie');
});

Route::get('/createactor', function () {
    return view('createActor');
});

Route::get('/editactor', function () {
    return view('editActor');
});

Route::get('/mywatchlist', function () {
    return view('myWatchList');
});

Route::get('/actor', function () {
    return view('actor');
});

Route::get('/myprofile', function(){
    return view('profilePage');
});

Route::get('/actordetail', function(){
    return view('actorDetail');
});

Route::get('/moviedetail', function(){
    return view('movieDetail');
});
