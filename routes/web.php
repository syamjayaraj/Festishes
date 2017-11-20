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
              // Front End
// Welcome
Route::get('/','WelcomeController@index');

// Selected Fest posts
Route::get('fest/{post}','PostController@showfeat');

// Text posts
Route::get('fest/{post}/texts', 'TextController@show');
// Image posts
Route::get('fest/{post}/images', 'ImageController@show');
// Gif posts
Route::get('fest/{post}/gifs', 'GifController@show');
// Video posts
Route::get('fest/{post}/videos', 'VideoController@show');

// About
Route::get('about',function(){
	return view('about');
});

// Contact
Route::get('contact', 'ContactController@create');
Route::post('addcontact', 'ContactController@store');


// Help
Route::get('help',function(){
	return view('help');
});

Auth::routes();
Route::get('/new8766',function(){
	return view('auth/new8766');
});


			// Back End
// Home
Route::get('/admin', 'HomeController@index');

// Create
Route::get('/admin/create', 'HomeController@create');

// Create Fest Category
Route::get('admin/create/fest', 'CategoryController@create');

// Create Fest Category | Upload cover
Route::get('/admin/create/{cat}/cover', 'CategoryController@upload');

Route::post('/festpost', 'CategoryController@store');

Route::post('/festcover', 'CategoryController@upload');

Route::get('admin/create/wish', 'PostController@index_wish');

Route::post('selfest', 'PostController@create_wish');

// Text
Route::get('admin/create/{cat}/text', 'PostController@create_type_text');
Route::post('addtext', 'TextController@store');


// Image
Route::get('admin/create/{cat}/image', 'PostController@create_type_image');
Route::post('addimage', 'ImageController@store');

//Gif
Route::get('admin/create/{cat}/gif', 'PostController@create_type_gif');
Route::post('addgif', 'GifController@store');

// Video
Route::get('admin/create/{cat}/video', 'PostController@create_type_video');
Route::post('addvideo', 'VideoController@store');