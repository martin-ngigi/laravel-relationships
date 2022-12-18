<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\UserResource;

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

//http://127.0.0.1:8000/user
Route::get('/user',function(){
  //return User::find(1)->profile;

  $users = User::orderBy('id','DESC')->get();
  return UserResource::collection($users);
});
