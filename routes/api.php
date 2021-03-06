<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\Api\ProductTypeContoller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\Api;

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

Route::apiResource('customers',CustomerController::class);

Route::apiResource('product',ProductController::class);
Route::apiResource('ptype',ProductTypeContoller::class);
