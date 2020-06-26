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

/*
Route::get('/', function () {
    return view('welcome');
});
Route::post('/', 'IndexController@showIndex');
Route::get('/login', 'IndexController@loginAction');
Route::get('register', 'IndexController@registerAction');
*/


Route::get('/', 'IndexController@showIndex');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/annonce', 'AnnonceController@index')->name('annonce');

// créer toutes les routes vers le CRUD
Route::resource('users', 'UsersController');
Route::resource('annonces', 'AnnonceController');

// edit page
Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::get('users/{user}/update', 'UsersController@update')->name('users.update');
Route::get('users/{user}/destroy', 'UsersController@destroy')->name('users.destroy');

Route::get('annonce/membre', 'AnnonceController@showMembreAnnonce')->name('annonces.showMembreAnnonce');

Route::get('annonce/order1', 'AnnonceController@orderByRecente')->name('annonces.orderByRecente');
Route::get('annonce/order2', 'AnnonceController@orderByTitre')->name('annonces.orderByTitre');
Route::get('annonce/order3', 'AnnonceController@orderByPrix')->name('annonces.orderByPrix');
Route::get('annonce/order4', 'AnnonceController@orderByVille')->name('annonces.orderByVille');