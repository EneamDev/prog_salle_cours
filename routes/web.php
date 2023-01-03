<?php

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

/*Route::get('/', function () {
    return view('home')->name('home');
});*/

route::view('/liste_enseignant' , 'liste_enseignant')->name('liste_enseignant');

route::view('/ajout_enseignant' , 'ajout_enseignant')->name('ajout_enseignant');

route::view('/liste_filiere' , 'liste_filiere')->name('liste_filiere');

route::view('/ajout_filiere' , 'ajout_filiere')->name('ajout_filiere');
