<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\test;

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

Route::get('testadmin', function () {
    return view('admin.testadmin');
});

Route::get('testuser', function () {
    return view('user.testuser');
});

Route::get('testinscription', function () {
    return view ('testinscriptionform');
});

Route::post('testinscriptionresultat', [test::class, 'testinscription']);

// Route::get('/', function () {
//     return view('welcome');
// });
