<?php

use Illuminate\Http\Request;

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
Route::group(['middleware' => 'cors'], function() {
   Route::resource('product','ProductController');
   Route::resource('store','StoreController');
   Route::resource('user','UserController');
   Route::get('search/{busqueda}',function($busqueda){
     $products = App\Product::all();

    $filtered = $products->filter(function($value, $key) use($busqueda) {
        return stristr($value->nombre,$busqueda);
    });
    return $filtered->all();
   });
});
