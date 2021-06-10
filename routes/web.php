<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SubmittalController;
use App\Models\Profile;

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

Route::get('/consultant/profile', function () {
    return view('/Consultant/Profile');
});

Route::get('/submittal/ini', function () {
    return view('/Submittal/Initiator');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



