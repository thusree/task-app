<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/sendmail', [App\Http\Controllers\MailController::class, 'sendContactMail'])->name('send.mail');
Route::get('/verifyAcccount', [App\Http\Controllers\SmsController::class, 'sendContactSms'])->name('send.sms');
Route::post('/verified', [App\Http\Controllers\SmsController::class, 'sendContactverified'])->name('send.verified');
