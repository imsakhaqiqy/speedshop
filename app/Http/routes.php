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
Route::resource('family', 'FamilyController');

Route::resource('unit', 'UnitController');
Route::post('deleteUnit','UnitController@destroy');

Route::resource('menu', 'MenuController');

Route::resource('speedshop', 'FrontController');

Route::resource('user', 'UserController');

Route::resource('role', 'RoleController');

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::controller('datatables', 'DatatablesController',[
  'getRoles'=>'datatables.getRoles',
  'getUsers'=>'datatables.getUsers',
  'getMenus'=>'datatables.getMenus',
<<<<<<< HEAD
  'getUnits'=>'datatables.getUnits',
=======
  'getFamilies'=>'datatables.getFamilies'
>>>>>>> 9f8169ae67eb8b043bcc7597d45d07b3796d9fab
]);
