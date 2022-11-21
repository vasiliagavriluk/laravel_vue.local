<?php

use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    Route::group([
        'prefix' => 'blog'
        ], function ($router) {

            Route::post('/', 'BlogController@index');
            Route::post('/create', 'BlogController@create');
            Route::post('/edit', 'BlogController@edit');
            Route::post('/update', 'BlogController@update');
            Route::post('/delete', 'BlogController@delete');

        });




});
