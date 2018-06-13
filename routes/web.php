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
    $products = DB::table('products')->get();
    return view('layout.index', compact('products'));
});

Route::get('/about', function () {
    return view('layout.about');
});
Route::get('/content', function () {
    return view('layout.content');
});
Route::get('/catlisting', function () {
    $products = DB::table('products')->get();
    return view('layout.catlisting',compact('products'));
});
Route::get('/support', function () {
    return view('layout.support');
});

Route::resource('user', 'UserController');
Route::resource('product', 'ProductsController');



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
            $users = \App\User::all();
            $products = DB::table('products')->get();
            return view ('/adminhome', compact('users','products'));
        }
    });
});

Route::get('/home/user', function () {
    $users = \App\User::all();
    return view('user',compact('users','products'));
});

Route::get('/home/product', function () {
    $products = DB::table('products')->get();
    return view('product',compact('users','products'));
});