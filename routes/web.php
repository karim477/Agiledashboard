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
});
*/
/*
Route::get('/about', function () {
    return view('pages.about');
});
*/
/*
Route::get('/users/{id}', function ($id) {
    return 'this is user '. $id;
});*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/Myhomepage','PagesController@Myhomepage');

Route::resource('posts','PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

/*Route::get('/project/{id}',function($id){
var_dump($id);
return view('posts.cardview');

});
Route::post('/project/sortcards',function(){

});*/
Route::resource('cards','CardsController');