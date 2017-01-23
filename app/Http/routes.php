<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CuboController@index');
Route::post('/', 'CuboController@create');
Route::post('/cube_summation/app/http/Controllers/CuboController.php', 'CuboController@update');
#Route::post('/cube_summation/app/http/Controllers/CuboController.php', 'CuboController@query');
#Route::post('/cube_summation/app/http/Controllers/CuboController.php?Q=query', 'CuboController@query');
Route::post('/cube_summation/app/http/Controllers/CuboController.php?Q=query', 'CuboController@query');
///cube_summation/app/http/Controllers/CuboController.php?Q=query



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
