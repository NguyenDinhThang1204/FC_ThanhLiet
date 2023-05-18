<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home\index');
});

Route::get('/intro', function () {
    return view('home\intro');
});
Route::get('/team', function () {
    return view('home\team');
});
Route::get('/video', function () {
    return view('home\video');
});
Route::get('/news', function () {
    return view('home\news');
});
Route::get('/ticket', function () {
    return view('home\ticket');
});
Route::get('/product', function () {
    return view('home\product');
});
Route::get('/contact', function () {
    return view('home\contact');
});
Route::get('/login', function () {
    return view('home\login');
});
Route::get('/privacy_policy', function () {
    return view('home\privacy_policy');
});
Route::get('/return_policy', function () {
    return view('home\return_policy');
});
Route::get('/shipping_policy', function () {
    return view('home\shipping_policy');
});
Route::get('/payment_policy', function () {
    return view('home\payment_policy');
});
