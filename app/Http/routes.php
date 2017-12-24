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
Route::get('sms',function(){
  $nexmo = app('Nexmo\Client');
  $nexmo->message()->send([
    'to'=>'6281296864017',
    'from'=>'ADMIN',
    'text'=>'KIRIM PESAN DARI LARAVEL DENGAN NEXMO',
  ]);
});
use App\Order;
use App\Customer;
Route::resource('category', 'CategoryController');
Route::post('deleteCategory','CategoryController@destroy');
Route::get('send_test_email',function(){
    $order = Order::findOrFail(18);
    $data_customer = Customer::findOrFail($order->customer_id);
    echo $order;
    echo "<br>";
    echo $order->order_details;
    echo "<br>";
    echo $data_customer;
});
Route::resource('list-product','ListProductController');

Route::resource('konfirmasipembayaran','S_KonfirmasiPembayaran');
Route::resource('pembayaran','SPembayaranController');
Route::resource('keluar','SLogoutController');

Route::resource('chart','SChartController');
Route::resource('single','SSingleController');

Route::resource('masuk', 'S_LoginController');
Route::post('berhasil','S_LoginController@berhasil');

Route::resource('product', 'ProductController');
Route::post('callCategory', 'ProductController@callCategory');

Route::resource('family', 'FamilyController');
Route::post('deleteFamily','FamilyController@destroy');

Route::resource('unit', 'UnitController');
Route::post('deleteUnit','UnitController@destroy');

Route::resource('menu', 'MenuController');

//Route::resource('speedshop', 'FrontController');

Route::resource('user', 'UserController');
Route::post('deleteUser','UserController@destroy');

Route::resource('role', 'RoleController');
Route::post('deleteRole','RoleController@destroy');

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
  'getFamilies'=>'datatables.getFamilies',
  'getCategories'=>'datatables.getCategories'
]);
