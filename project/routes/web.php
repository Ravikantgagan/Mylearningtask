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
   return view('welcome');
 });

//    return view('index');
//});
Route::get('call',"NewController@show");
//Route::get('services',"NewController@services");
Route::get('team',"NewController@team");
Route::get('products',"NewController@products");
Route::get('theme',"NewController@theme");
	
	//all route of theme controller
	
	Route::get('features',"ThemeController@features");

	Route::get(' services',"ThemeController@services");

	Route::get('gallery',"ThemeController@gallery");

	Route::get('testimonials',"ThemeController@testimonials");

	Route::get(' teams',"ThemeController@teams");

	Route::get('about',"ThemeController@about");

	Route::get('contact',"ThemeController@contact");

	Route::get('themehome',"ThemeController@themehome");

	Route::get('insert',"InsertformController@getform");

	Route::post("insert", "InsertformController@postFormData");



	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	//Route send data from controller to view 

	Route::get('view','ViewSendDataController@viewData');

	Route::get('insertintodb','DataInsertToDbController@index');

	//****	****************************************************************************
	//get data form form 
	Route::get('/','GetUrlDataController@index');
	//post data form store method
	Route::post('/getdata','GetUrlDataController@store')->name('storedata');
	//***************************************************************************
	Route::get('new','HelloController@about');