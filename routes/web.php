<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Schemas\UserSchema;
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

Auth::routes();

Route::resources([
    'home' => HomeController::class,
    'user' => UserController::class,
]);

Route::get('user-simple',function (){

    $users=User::all();
    $userInputs = (new UserSchema())->userInputs();
    return view('user.index-simple',compact('users','userInputs'));

}) -> name ('user.index-simple');

