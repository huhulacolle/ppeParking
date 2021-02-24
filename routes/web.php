<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\test;
use App\Http\Controllers\connexion;
use App\Http\Controllers\admin;
use App\Http\Controllers\user;

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
    return view('pageconnexion');
});

Route::post('/', [connexion::class, 'connexion']);

Route::get('Inscription', function () {
    return view('pageinscription');
});


Route::get('testadmin', function () {
    return view('admin.testadmin');
});

Route::post('ListeAttente', [admin::class, 'listeattente']);

Route::get('testuser', function () {
    return view('user.testuser');
});

Route::post('VosReservation', [user::class, 'reservation']);

Route::get('testinscription', function () {
    return view ('testinscriptionform');
});

Route::post('testinscriptionresultat', [test::class, 'testinscription']);

// Route::get('/', function () {
//     return view('welcome');
// });
