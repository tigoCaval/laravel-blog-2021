<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\WelcomeController@index')->name('welcome');
Route::get('/article/{title}/{id}', 'App\Http\Controllers\WelcomeController@show')->name('article.public');
Route::get('/articles', 'App\Http\Controllers\WelcomeController@search')->name('article.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {

    Route::get('job/article', ['as' => 'articles.index', 'uses' => 'App\Http\Controllers\ArticleController@index']);
	Route::get('job/article/create', ['as' => 'articles.create', 'uses' => 'App\Http\Controllers\ArticleController@create']);
	Route::get('job/article/edit/{id}', ['as' => 'articles.edit', 'uses' => 'App\Http\Controllers\ArticleController@edit']);
	Route::put('job/article/edit/{id}', ['as' => 'articles.update', 'uses' => 'App\Http\Controllers\ArticleController@update']);
	Route::post('job/article/create', ['as' => 'articles.store', 'uses' => 'App\Http\Controllers\ArticleController@store']);
    Route::get('job/article/show/{id}', ['as' => 'articles.show', 'uses' => 'App\Http\Controllers\ArticleController@show']);
	Route::delete('job/article/show/{id}', ['as' => 'articles.destroy', 'uses' => 'App\Http\Controllers\ArticleController@destroy']);
	
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

