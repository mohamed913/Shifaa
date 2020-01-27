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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/articles/{id}', 'Article\ArticleController@indexarticle')->name('articles.index');

Route::get('/bodies', 'Body\BodyController@index')->name('body.index');
Route::get('/bodies/{body}','Body\BodyController@show')->name('body.show');
Route::get('/articles/{id}', 'Article\ArticleController@show')->name('articles.show');

//this routes for rate
Route::get('posts', 'Rate\RateController@posts')->name('posts');


//get the user data with their articles
Route::get('/diseases', 'Disease\DiseaseController@index')->name('diseases.index');
Route::get('/diseases/{disease}','Disease\DiseaseController@show')->name('diseases.show');

// test route
// Route::get('/cat', 'Category\CategoryController@index');
Route::post('posts', 'Rate\RateController@postPost')->name('posts.post');
Route::get('posts/{id}', 'Rate\RateController@show')->name('posts.show');
// test route
// Route::get('/art/{id}', 'Article\ArticleController@indexarticle')->name('articles.index');

//test here without controller
// Route::get('/art/{id}', function(){
//     $art = Article::find(2);
//     dd($art->comments);
// });

Route::get('/comments', 'Article\ArticleController@indexcomment')->name('comments.index');
Route::get('/comments/create', 'Article\ArticleController@createcomment')->name('comments.create');
Route::get('/comments/approve/{id}', 'Article\ArticleController@approvecomment')->name('comments.approve');
Route::delete('/comments/{id}', 'Article\ArticleController@destroycomment')->name('comments.destroy');

//Route::get('/test/{id}','Profile\ProfileController@showAnotherProfile');
//Route::get('/test',function (){
//    $user = \App\User::find(auth()->user()->id);
//    $cat = \App\Category::find(7);
//    dd($cat->users[0]);
//    return view('profile/show');
//});

Route::get('/profiles','Profile\ProfileController@showMyProfile');
Route::get('/profiles/{Profile}','Profile\ProfileController@show')->name('profiles.show');
Route::get('/profiles/{profile}/edit','Profile\ProfileController@edit');
Route::put('/profiles/{profile}','Profile\ProfileController@update')->name('profiles.update');

Route::get('/doctors','Doctor\DoctorController@index');
Route::get('/doctors/{doctor}','Doctor\DoctorController@show');


//create routes for and reveal time 
