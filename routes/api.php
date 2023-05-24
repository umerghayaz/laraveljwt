<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Public Routes
// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/{id}', [StudentController::class, 'show']);
// Route::post('/students', [StudentController::class, 'store']);
// Route::put('/students/{id}', [StudentController::class, 'update']);
// Route::delete('/students/{id}', [StudentController::class, 'destroy']);
// Route::get('/students/search/{city}', [StudentController::class, 'search']);
Route::middleware(['auth:sanctum'])->group(function(){
  Route::get('/students', [StudentController::class, 'index']);
  Route::get('/students/{id}', [StudentController::class, 'show']);
  Route::post('/students', [StudentController::class, 'store']);
  Route::put('/students/{id}', [StudentController::class, 'update']);
  Route::delete('/students/{id}', [StudentController::class, 'destroy']);
  Route::get('/students/search/{city}', [StudentController::class, 'search']);
  Route::post('/logout', [UserController::class, 'logout']);
});
// Route::post('login', [AuthController::class,'login']);
// Route::post('register', [AuthController::class,'register']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
// Route::group(['middleware'=>'api'],function(){
//     Route::post('logout', [UserController::class,'logout']);
//     Route::post('refresh', [AuthController::class,'refresh']);
//     Route::post('me', [AuthController::class,'me']);
// });
