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



Route::get('callback', [
    'uses'  => 'faceController@handleProviderCallback',
    'as'    => 'giveaway-callback'
]);
Route::get('/quienessomos', function () {

    return view('Home/quienessomos');
});
Route::get('contacto', function () {

    return view('Home/contacto');
});

Route::get('/ex','ProductoController@ex');
;
Route::get('productos','ProductoController@mostrar');

Route::get('category','ProductoController@mostrar');
Route::get('/producto/{id}', ['uses'=>'ProductoController@getAddToCart',
	'as' => 'producto.addToCart'
]);
Route::post('/checkout',[
	'uses'=>'ProductoController@postCheckout',
	'as' => 'checkout',
	'middleware'=>'auth'
	

]);
Route::get('/perfil/index', function () {

    return view('/perfil/index');
});

Route::get('perfilu','UserController@index');
Route::get('/', function () {

    return view('Home/index');
});
Route::get('checkout', function () {

    return view('Home/checkout');
});


Route::get('/reduce/{id}',[
	'uses'=>'ProductoController@getReduceByOne',
	'as' => 'product.reduceByOne'
]);
Route::get('/agregar/{id}',[
	'uses'=>'ProductoController@getAdd',
	'as' => 'product.add'
]);
Route::get('/remove/{id}',[
	'uses'=>'ProductoController@getRemoveItem',
	'as' => 'product.remove'
]);
Route::get('carro', [
	'uses'=>'ProductoController@getCart',
	'as' => 'producto.shoppingCart'
]);

Route::get('/checkout',[
	'uses'=>'ProductoController@getCheckout',
	'as'=>'checkout',
	'middleware'=>'auth'

]);

Route::get('productos/{id}',[
	'uses'=> 'ProductoController@mostrarp',
	'as' => 'productos.cat'
]);
Route::get('/','PanelController@ver');

Auth::routes(	);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function(){
		Route::get('perfil/', [
			'uses'=> 'UserController@getProfile','as'=> 'user.profile'
		]
	);
	Route::get('/logout', [
		'uses'=> 'UserController@getLogout',
		'as'=>'user.logout'
	]);
});


Route::group(['middleware' => 'can:accessAdminpanel'], function(){
	Route::get('perfil/',['uses'=> 'AlmacenController@index', 'as' => 'user.profile']);
	Route::post('perfil',['uses'=> 'OrdenController@edit', 'as' => 'OrdenController@edit']);
	Route::resource('ventas/cliente','AlmacenController');
	Route::resource('almacen/categoria','CategoriaController');
	Route::resource('compras/proveedor','AlmacenController');
	Route::resource('almacen/panel','PanelController');
	Route::resource('almacen/producto','ProductoController');
	Route::resource('ventas/ordenes','OrdenController');
});	

  
