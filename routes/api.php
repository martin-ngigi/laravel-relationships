<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

/**
 * 'store' is a method defined in the UserController
 *
 * http://127.0.0.1:8000/api/users/create
 */
Route::post('/users/create', [UserController::class, 'store']);

/**
 * 'index' is a method defined in the UserController
 *
 * http://127.0.0.1:8000/api/users/all
 */
Route::get('/users/all', [UserController::class, 'index']);


/**
 * 'show' is a method defined in the UserController
 *
 * http://127.0.0.1:8000/api/users/1
 */
Route::get('/users/{id}', [UserController::class,'show']);


/**
 * 'update' is a method defined in the UserController
 *
 * http://127.0.0.1:8000/api/users/update/1
 */
Route::put('/users/update/{id}', [UserController::class,'update']);

/**
 * 'destroy' is a method defined in the UserController
 *
 * http://127.0.0.1:8000/api/users/delete/1
 */
Route::delete('/users/delete/{id}', [UserController::class,'destroy']);

/**
 * 'search' is a method defined in the UserController
 *
 * http://127.0.0.1:8000/api/users/search/martin
 */
Route::get('/users/search/{name}', [UserController::class,'search']);


// * PROFILE
/**
 * 'store' is a method defined in the ProfileController
 * http://127.0.0.1:8000/api/profile/create
 */
//
Route::post('/profile/create', [ProfileController::class, 'store']);


//GET USER REOURCE, IE NESTED USER OBJECT
/**
 * 'get_user_resource' is a method defined in the UserController
 *  http://127.0.0.1:8000/api/user_resource
 */
Route::get('/user_resource', [UserController::class, 'get_user_resource']);

//CREATE PHONE
/**
 * 'store' is a method defined in the PhoneController
 *  http://127.0.0.1:8000/api/create/phone
 */
Route::post('/create/phone', [PhoneController::class, 'store']);
