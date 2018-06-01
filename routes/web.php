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
    $products = DB::table('products')->get();
    return view('layout.content',compact('products'));
});
Route::get('/catlisting', function () {
    $products = DB::table('products')->get();
    return view('layout.catlisting', compact('products'));
});

Route::resource('user', 'UserController');
Route::resource('product','ProductController');

<<<<<<< HEAD
Auth::routes();

//CRUD PRODUCT


=======



Auth::routes();

>>>>>>> Rik
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
<<<<<<< HEAD
            $products = DB::table('products')->get();
           // $users = DB::table('users')->get();

            return view ('/adminhome', compact('users','products'));
=======
            return view ('/adminhome', $users);
>>>>>>> Rik
        }
    });
});