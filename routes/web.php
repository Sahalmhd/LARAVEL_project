<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('layout/signup', [UserController::class,'showSignupPage'])->name('signup');
Route::get('layout/user_dash', [UserController::class,'Show_user_dash'])->name('user');
Route::get('layout/user_apply', [UserController::class,'Show_user_apply'])->name('user-apply');


Route::match(['get', 'post'], 'layout/employer_post', [UserController::class, 'Show_employer_post'])->name('employer-post');
Route::get('layout/employer_dash', [UserController::class,'Show_employer_dash'])->name('employer-dash');
Route::get('layout/employer_postedjob', [UserController::class,'Show_employer_postedjob'])->name('employer-posted');






