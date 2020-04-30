<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $links=\App\Link::all();
    return view('welcome',['links'=>$links]);
});
Route::get('/submit', function () {
    $links=\App\Link::all();
    return view('submit');
});
Route::get('/shop','ProductController@index')->name('shop.index');
Route::get('/addTocart/{id}','ProductController@addTocart')->middleware('auth');
Route::get('/cart','ProductController@cart')->name('shop.cart')->middleware('auth');
Route::get('/cart/checkout','ProductController@checkout')->middleware(('auth'))->name('shop.checkout');
Route::patch('/cart/update/{id}','ProductController@update')->middleware('auth')->name('shop.update');
Route::post('/submit', function (Request $request) {
    $data =$request->validate([
        'title'=>'required|max:255',
        'url' => 'required|max:255',
        'description' => 'required|max:255'
    ]);
    $link=tap(new App\Link($data))->save();

    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
