<?php

Route::get('/', 'UserController@index')->name('index');

// Route::get('/{category}/{id}', 'SomeController@show');
Route::get('/product/{name}', 'ProductController@show');
Route::post('/transaction', function ()
{
	
        dd('iyakhvsdiask');
});
Route::get('/{category}', 'UserController@category');

Route::name('admin.')->prefix('admin')->group(function(){
	Route::get('/', function ()
	{
		return view('layouts.backend.app');
	})->name('index');
	
    Route::resource('/category', 'CategoryController');
    Route::resource('/product', 'ProductController');
});

Auth::routes();