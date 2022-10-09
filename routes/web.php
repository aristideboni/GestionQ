<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\HabitantController;
use App\Http\Controllers\LogementController;
use App\Http\Controllers\QuartierController;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('app_dashboard');
Route::controller(PaysController::class)->group(function(){
    Route::get('/pays/list', 'paysList')->name('app_pays_list');
    Route::get('/pays/add', 'paysAdd')->name('app_pays_add');
    Route::post('/pays/add', 'paysCreate')->name('app_pays_create');
    Route::delete('/pays/list/{pays}', 'paysDelete')->name('app_pays_delete');
    Route::get('/pays/edit/{pays}', 'paysEdit')->name('app_pays_edit');
    Route::put('/pays/edit/{pays}', 'paysUpdate')->name('app_pays_update');
});

Route::controller(VilleController::class)->group(function(){
    Route::get('/ville/list', 'villeList')->name('app_ville_list');
    Route::get('/ville/add', 'villeAdd')->name('app_ville_add');
    Route::post('/ville/add', 'villeCreate')->name('app_ville_create');
    Route::delete('/ville/list/{ville}', 'villeDelete')->name('app_ville_delete');
    Route::get('/ville/edit/{id}', 'villeEdit')->name('app_ville_edit');
    Route::put('/ville/edit/{id}', 'villeUpdate')->name('app_ville_update');

});

Route::controller(QuartierController::class)->group(function(){
    Route::get('/quartier/list', 'quartierList')->name('app_quartier_list');
    Route::get('/quartier/add', 'quartierAdd')->name('app_quartier_add');
    Route::post('/quartier/add', 'quartierCreate')->name('app_quartier_create');
    Route::delete('/quartier/list/{quartier}', 'quartierDelete')->name('app_quartier_delete');
    Route::get('/quartier/edit/{id}', 'quartierEdit')->name('app_quartier_edit');
    Route::put('/quartier/edit/{id}', 'quartierUpdate')->name('app_quartier_update');

});

Route::controller(LogementController::class)->group(function(){
    Route::get('/logement/list', 'logementList')->name('app_logement_list');
    Route::get('/logement/add', 'logementAdd')->name('app_logement_add');
    Route::post('/logement/add', 'logementCreate')->name('app_logement_create');
    Route::delete('/logement/list/{logement}', 'logementDelete')->name('app_logement_delete');
    Route::get('/logement/edit/{id}', 'logementEdit')->name('app_logement_edit');
    Route::put('/logement/edit/{id}', 'logementUpdate')->name('app_logement_update');

});

Route::controller(HabitantController::class)->group(function(){
    Route::get('/habitant/list', 'habitantList')->name('app_habitant_list');
    Route::get('/habitant/add', 'habitantAdd')->name('app_habitant_add');
    Route::post('/habitant/add', 'habitantCreate')->name('app_habitant_create');
    Route::delete('/habitant/list/{habitant}', 'habitantDelete')->name('app_habitant_delete');
    Route::get('/habitant/edit/{id}', 'habitantEdit')->name('app_habitant_edit');
    Route::put('/habitant/edit/{id}', 'habitantUpdate')->name('app_habitant_update');

});

