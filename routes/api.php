<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HeartController;
use App\Http\Controllers\CommentController;

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


Route::apiResource('/user',UserController::class)->only(['store']);
Route::apiResource('/message',MessageController::class)->only(['index','store','show','destroy']);
Route::apiResource('/heart',HeartController::class)->only(['store','destroy']);
Route::apiResource('/comment',CommentController::class)->only(['store','destroy']);


