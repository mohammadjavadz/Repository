<?php

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
   $r = \App\User::find(2)->contacts;
   foreach ($r as $b){
   	echo $b->name;
   	echo '<br>';
   }
});

Route::get('/repository/{id}','UserController@show');
Route::get('/repository/{id}/insertcontact/{name}','UserController@insert');
