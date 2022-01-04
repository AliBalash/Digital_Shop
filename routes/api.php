<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('test', [\App\Http\Controllers\api\TestApi::class, 'testApi']);
Route::get('test/{user}', [\App\Http\Controllers\api\TestApi::class, 'show']);
//Create with POST
Route::post('test', [\App\Http\Controllers\api\TestApi::class, 'createUser']);
//Update with PUT
Route::put('test/{user}', [\App\Http\Controllers\api\TestApi::class, 'updateUser']);
//Delete whit DELETE
Route::delete('test/{user}', [\App\Http\Controllers\api\TestApi::class, 'deleteUser']);

