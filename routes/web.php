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
// Back

Route::get('/admin/login', 'Front\IndexController@login')->name('admin.login');

Route::middleware('is_admin')->group(function (){

    Route::get('/admin/dashboard', 'Back\AdminController@dashboard')->name('dahsboard');
    Route::resource('/admin/posts','Back\PostController');
    Route::resource('/admin/categories','Back\CategoryController');
    Route::post('/categoryfetch','Back\CategoryController@categoryfetch')->name('admin.categoryfetch');

});



// Front
Route::get('/', 'Front\IndexController@index');
Route::get('/home', 'Front\IndexController@index')->name('home');
Route::get('/{category}' ,'Front\IndexController@category')->name('category');
Route::get('/{category}/{single}', 'Front\IndexController@single')->name('single');

Auth::routes();


