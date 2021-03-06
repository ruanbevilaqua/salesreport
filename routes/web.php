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

Route::group(['middleware' => ['jwt.verify']], function() {
    // Rotas protegidas aqui
    Route::get('/client/export', 'ClientController@export');
    Route::resource('client', 'ClientController');
    Route::get('/order/export', 'OrderController@export');
    Route::resource('order', 'OrderController');
    Route::resource('payment', 'PaymentController');
    Route::get('/product/export', 'ProductController@export');
    Route::resource('product', 'ProductController');
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    if(isset($_COOKIE['jwt']))
    {
        unset($_COOKIE['jwt']);
        setcookie('jwt', '', time() - 3600, '/'); // empty value and old timestamp
    }
    return redirect()->route('login');
});





