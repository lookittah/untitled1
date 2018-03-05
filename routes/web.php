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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/view_messages', function () {
    return view('pages.view_messages');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/signin', function () {
    return view('pages.signin');
});


Route::get('/logout', function () {
    return view('pages.logout');
});


Route::get('/card', function () {
    return view('pages.card');
});

Route::post('/contact', function () {
    $data=request() ->all() ;
   echo "email: " . $data["email"] . '<br>' ;

    echo "body: " . $data ["body"];


});
