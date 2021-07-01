<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\signupController;
use App\http\Controllers\messagesController;
use App\http\Controllers\LogController;
use App\http\Controllers\UserAuth;
use App\http\Controllers\SubmittalController;

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



Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');



Route::get('/consultant/profile',[LogController::class,'index']);




Route::get('/Submittal/Initator','App\Http\Controllers\SubmittalController@ShowInitatorForm');

Route::get('/Submittal/Contractor_Recv','App\Http\Controllers\SubmittalController@ShowContractorRecieveForm');

Route::get('/Submittal/Contractor_Sent','App\Http\Controllers\SubmittalController@ShowContractorSendForm');

Route::get('/Submittal/Consultant_Recieve','App\Http\Controllers\SubmittalController@ShowConsultantRecieveForm');

Route::get('/Submittal/Consultant_Reply','App\Http\Controllers\SubmittalController@ShowConsultantReplyForm');

Route::get('/Submittal/Consultant_Team_Reply','App\Http\Controllers\SubmittalController@ShowConsultantTeamReplyForm');






Route::get('/Submittal/Log_Submittals',[SubmittalController::class,'index']);

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
Route::get('/Submittal/Log_Submittals', function () {
    return view('/Submittal/Log_Submittals');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



