<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('chart','SChartController');
Route::resource('single','SSingleController');
Route::resource('keluar','SLogoutController');
Route::resource('masuk', 'S_LoginController');
Route::post('berhasil','S_LoginController@berhasil');

Route::resource('product', 'ProductController');

Route::resource('family', 'FamilyController');

Route::resource('unit', 'UnitController');
Route::post('deleteUnit','UnitController@destroy');

Route::resource('menu', 'MenuController');

//Route::resource('speedshop', 'FrontController');

Route::resource('user', 'UserController');

Route::resource('role', 'RoleController');

Route::resource('daftar', 'SDaftarController');

Route::resource('speedshop', 'SHomeController');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::controller('datatables', 'DatatablesController',[
  'getRoles'=>'datatables.getRoles',
  'getUsers'=>'datatables.getUsers',
  'getMenus'=>'datatables.getMenus',
  'getProducts'=>'datatables.getProducts',
  'getUnits'=>'datatables.getUnits',
  'getFamilies'=>'datatables.getFamilies'
]);
