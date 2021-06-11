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

Route::get('/submittal/cont_sent', function () {
    return view('/Submittal/Contractor_Sent');
});

Route::get('/submittal/cons_recv', function () {
    return view('/Submittal/Consultant_Recieve');
});

Route::get('/submittal/cons_team_recv', function () {
    return view('/Submittal/Consultant_Team_Reply');
});

Route::get('/submittal/cons_rep', function () {
    return view('/Submittal/Consultant_Reply');
});

Route::get('/submittal/cont_recv', function () {
    return view('/Submittal/Contractor_Recv');
});
Route::get('/submittal/main', function () {
    return view('/Submittal/Main_Submittals');
});
Route::get('/submittal/log', function () {
    return view('/Submittal/Log_Submittals');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



