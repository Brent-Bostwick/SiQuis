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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/team', 'team');
Route::view('/siquis', 'siquis');
Route::view('/platform', 'siquis');
Route::view('/management', 'management');
Route::view('/operations', 'operations');
Route::view('/themes', 'themes');
Route::view('/passion-economy', 'passion_economy');
Route::view('/SiQuis_Deck_020222', 'SiQuis_Deck_020222');
Route::view('/SiQuis_Exec_020222', 'SiQuis_Exec_020222');
Route::view('/SiQuis-BusPlan_HOME', 'SiQuis-BusPlan_HOME');
