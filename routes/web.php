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

 Route::get('/config-cache', function() {
     $exitCode = Artisan::call('config:cache');
     $exitconf = Artisan::call('config:clear');
     $exitroute = Artisan::call('route:clear');
     $exitview = Artisan::call('view:clear');
     return 'All cache cleared';
 });
 
Route::get('/test', function(){

	 return view('backend.dashboard');
});

Route::get('/create', function(){

	 return view('backend.create');
});

Route::get('/', 
    [
		'uses'=>'productPageController@homePage',
		'as'=>'home',
	]
);

Route::get('/product/{product}', 
	[
		'uses'=>'productPageController@landingPage',
		'as'=>'product',
	]
);

Route::get('/editor', 
	[
		'uses'=>'productPageController@editorPage',
		'as'=>'editor',
	]
);

Route::post('/product/order', 
	[
		'uses'=>'productPageController@order',
		'as'=>'product.order',
	]
);

Route::get('/product/order/success', 
	[
		'uses'=>'productPageController@success',
		'as'=>'thank_you',
	]
);
