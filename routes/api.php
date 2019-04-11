<?php

use Illuminate\Http\Request;
Use App\Product;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('product', 'ProductController@index');

Route::get('product/{id}', function($id) {
    return Product::find($id);
});

Route::post('product', 'ProductController@create');

Route::put('product/{id}', 'ProductController@update');

Route::delete('product/{id}', function($id) {
    Product::find($id)->delete();

    return 204;
});


