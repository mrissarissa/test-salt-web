<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\TaskLogic2Job;
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
    return view('welcome');
});
Route::get('/sending-queue', [App\Http\Controllers\CronController::class,'handleJob']);
Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'find']);
