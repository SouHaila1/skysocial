<?php

use Illuminate\Support\Facades\Route;
use App\Post;
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

Route::get('/', function(){
    return view('welcome');
});



Route::get('/', [
    'uses' => 'PostController@show',
    'as' => 'welcome',
    'middleware' => 'auth'
]);

Route::post('/createpost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post',
    'middleware' => 'auth'
]);



Route::post('/like', [
    'uses' => 'PostController@postLikePost',
    'as' => 'like'
]);



Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index');
