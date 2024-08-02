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


$ctrl = '\App\Http\Controllers';

// Login
Route::get('login', $ctrl.'\LoginController@view')->name('login');
Route::post('login', $ctrl.'\LoginController@authenticate')->name('login.auth');

// Home as the default root route
Route::get('/', $ctrl.'\HomeController@view')->name('home');
Route::get('article/{id}', $ctrl.'\HomeController@articleView')->name('article.view');

// Dashboard (protected by auth middleware)
Route::middleware('auth')->get('dashboard', $ctrl.'\DashboardController@view')->name('dashboard');

// Logout
Route::post('logout', $ctrl.'\LoginController@logout')->name('logout');

// Product
Route::get('product',$ctrl.'\ProductController@view')->name('product');
Route::get('addproduct',$ctrl.'\ProductController@addproduct')->name('addproduct');
Route::post('createproduct',$ctrl.'\ProductController@create')->name('products.create');
Route::get('editproduct/{id}', $ctrl.'\ProductController@edit')->name('products.edit');
Route::put('updateproduct/{id}', $ctrl.'\ProductController@update')->name('products.update');
Route::delete('deleteproduct/{id}', $ctrl.'\ProductController@delete')->name('products.delete');
Route::get('detailproduct/{id}', $ctrl.'\ProductController@show')->name('product.detail');

// Promo
Route::get('promo',$ctrl.'\PromoController@view')->name('promo');
Route::get('addpromo',$ctrl.'\PromoController@addpromo')->name('addpromo');
Route::post('createpromo',$ctrl.'\PromoController@create')->name('promo.create');
Route::get('editpromo/{id}', $ctrl.'\PromoController@edit')->name('promo.edit');
Route::put('updatepromo/{id}', $ctrl.'\PromoController@update')->name('promo.update');
Route::delete('deletepromo/{id}', $ctrl.'\PromoController@delete')->name('promo.delete');
Route::get('detailpromo/{id}', $ctrl.'\PromoController@show')->name('promo.detail');

// Article
Route::get('article',$ctrl.'\ArticleController@view')->name('article');
Route::get('addarticle',$ctrl.'\ArticleController@addarticle')->name('addarticle');
Route::post('createarticle',$ctrl.'\ArticleController@create')->name('article.create');
Route::get('editarticle/{id}', $ctrl.'\ArticleController@edit')->name('article.edit');
Route::put('updatearticle/{id}', $ctrl.'\ArticleController@update')->name('article.update');
Route::delete('deletearticle/{id}', $ctrl.'\ArticleController@delete')->name('article.delete');
Route::get('detailarticle/{id}', $ctrl.'\ArticleController@show')->name('article.detail');





