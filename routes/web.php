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

Route::get('/', function () {
    return view('layout.index');
});

Route::get('/about', function () {
    return view('layout.about');
});
Route::get('/content', function () {
    return view('layout.content');
});
Route::get('/catlisting', function () {
    return view('layout.catlisting');
});

Route::resource('user', 'UserController');




Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::group(['middleware' => ['web', 'auth']], function (){
    Route::get('/home', function () {
        return view('layout.index');
    });

    Route::get('/home', function (){

        if (auth::user()->admin == 0) {
            return view('home');
        }
        else {
            $users['users'] = \App\User::all();
            $products = DB::table('products')->get();
            return view ('/adminhome', $users,compact('products'));
        }
    });
});

