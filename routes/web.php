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

/*Route::get('/', function () {
    return view('welcome');
});
/*
/Route::get('/', function () {
    return view('index');
});
Route::get('home', function () {
    return view('index');
});
*/
//LLAMAR CONTROLADOR A LA VISTA
Route::get('/','inademController@ver');


//Route::get('admin', function () {return view('admin');});
Route::get('admin','AdminController@index');
Route::get('admin/{id}','AdminController@editar');
Route::post('admin/{id}','AdminController@eliminar');

//// enrutamiento de la accion
Route::post('/insertar', 'inademController@insertar');


#DataTables - Admin
Route::get('datatable', ['uses'=>'PostController@datatable']);
Route::get('datatable/getposts', ['as'=>'datatable.getposts','uses'=>'PostController@getPosts']);