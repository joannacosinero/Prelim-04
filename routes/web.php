<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[AuthController::class, 'land']);
Route::get('/register',[AuthController::class, 'registrationForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::post('/login',[AuthController::class, 'login']);
Route::get('/verification/{user}/{token}',[AuthController::class, 'verification']);


//Route::get('/dashboard', function(){
 //   return view('dashboard'); 
//})->middleware('auth');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard',[AuthController::class, 'dashboard']);
    Route::get('/send-mail', [MailController::class, 'showEmailForm']);
    Route::post('/send-mail', [MailController::class, 'sendMail']);
   
    
});



