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

 Route::get('/', 'HomeController@index');

 Route::get('/about-us', function (){
     return view('frontend.about.index');
 });

 Route::get('/api/blogs/limit/{limit}', 'BlogController@getBlogs');

 Route::get('/blogs', 'BlogController@index');

 Route::get('/blog/article/{slug}', 'BlogController@article');

 Route::get('/contact-us', 'ContactController@index');

 Route::post('/contact/store', [
     'as' => 'contact.store',
     'uses' => 'ContactController@store'
 ]);
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

// Route::group(['middleware' => ['web']], function () {
//
// });
