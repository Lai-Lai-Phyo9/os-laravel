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

Route::get('/', function () {
    return view('backendtemplate');
});

//backend_route
Route::resource('/brands', 'BrandController');
Route::resource('/categories', 'CategoryController');
Route::resource('/subcategories', 'SubcategoryController');
