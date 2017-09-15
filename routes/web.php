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
//Enrutamiento de la modificacion de proyectos (lo que sigue de admin)
Route::get('/proyecto/{id}','inademController@editar');
Route::get('/equipoemprendedor/{id}','inademController@editar');

//Route::get('admin', function () {return view('admin');});
Route::get('admin','AdminController@index');
Route::get('admin/{id}','AdminController@editar');
Route::post('admin/{id}','AdminController@eliminar');

<<<<<<< HEAD
=======
//Enrutamiento de la modificacion de proyectos (lo que sigue de admin)
Route::get('editar', function(){
    return view('editar');
});

<<<<<<< HEAD
//Enrutamiento de la generación del archivo Excel
Route::get('generarExcel', function(){
    return view('generarExcel');
});


//// enrutamiento de la accion
Route::post('insertar', 'inademController@insertar');
Route::post('reciboArray','inademController@reciboArray');
=======
//metodo para token
Route::post('tokenInademApp', 'inademController@tokenInademApp');
>>>>>>> e218aeb3a4215e25cfad91d684af5f07e81e8299
//// enrutamiento de la accion
Route::post('insertar', 'inademController@insertar');
Route::post('insertarParticipante','inademController@insertarParticipante');
Route::post('eliminarParticipante','inademController@eliminarParticipante');
Route::post('insertarRiesgo','inademController@insertarRiesgo');
>>>>>>> ca5acb3b27437c6d91f0665e57e09dba209ecbfe

#DataTables - Admin
Route::get('datatable', ['uses'=>'PostController@datatable']);
Route::get('datatable/getposts', ['as'=>'datatable.getposts','uses'=>'PostController@getPosts']);




