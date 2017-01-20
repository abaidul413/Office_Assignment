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
});*/

Auth::routes();

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle']);
    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');
	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');


	Route::get('moderate/posts/{id}', 'ModeratorController@getPost');
	Route::get('moderate/posts/spam/{id}', 'ModeratorController@markSpam');
	Route::get('moderate/posts/approve/{id}', 'ModeratorController@approvePost');

	Route::get('barchart','PagesController@getBarChart');
    Route::get('piechart','PagesController@getPieChart');





