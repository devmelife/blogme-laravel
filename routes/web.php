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
// Route::get('/about', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('services', 'PagesController@services');





Auth::routes();
Route::group(['middleware' => 'revalidate'], function()
{
   Route::get('dashboard', 'DashboardController@index')->name('dashboard');
   Route::get('mypost', 'DashboardController@mypost');
   Route::resource('posts','PostsController');
   Route::resource('showdash','PostsController');
   Route::get('posts/{id}/delete','PostsController@destroy');
});











