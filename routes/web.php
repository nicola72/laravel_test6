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
use App\Article;
use App\Tag;


/*Route::get('/', function () {
    $articles = Article::all();
    $tags = Tag::all();
    return view('welcome',['articles' => $articles,'tags'=> $tags]);
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ArticleController@main');

//per aggiungere una route a quelle preimpostate da resource
//Route::get('tasks/important','TaskController@important');

Route::resource('tasks','TaskController');
Route::resource('users','UserController');
Route::resource('articles','ArticleController');
Route::resource('profiles','ProfileController');
Route::resource('comments','CommentController');

Route::get('/users/{id}/articles','ArticleController@articles');


