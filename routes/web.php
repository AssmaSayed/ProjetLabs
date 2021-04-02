<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NewsletterMailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
// RESOURCE
Route::resource('/', HomeController::class);
Route::resource('services', ServiceController::class);
Route::resource('blog', BlogController::class);
Route::resource('contact', ContactController::class);
Route::resource('user', UserController::class);
Route::resource('newsletterMail', NewsletterMailController::class);



Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


//POST
Route::post('/mail', [MailController::class, 'store']);