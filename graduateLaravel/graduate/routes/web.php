<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\NoCache;
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
    // session()->flush();
    // var_dump(session('loggedIn'));
    return view('index');
});


Route::get('/logout', function () {
    session()->flush();
    return view('index');
});

Route::middleware('disappearLoginPage')->get('/viewSL', function () {
    return view('signupLogin');
});

Route::post('/signup', 'App\Http\Controllers\UserController@signup');

Route::post('/login','App\Http\Controllers\UserController@login');

Route::post('contact-us', 'App\Http\Controllers\ContactController@store');

Route::middleware('authentication')->get('/colorblindness_test', function(){
    return view('colorblindness_test');
});

Route::middleware('authentication')->get('/color_game', function(){
    return view('color_game');
});
Route::middleware('authentication')->get('/getColor', function(){
    return view('getColor');
});

Route::middleware('authentication')->get('/colorRecognition_uploadImage',function(){
    return view('Learn about colors by entering a picture');
});


Route::post('/colorRecognition_uploadImage','App\Http\Controllers\ServicesController@colorRecognition_uploadImage');




Route::middleware('authentication')->get('/colorRecognition_openCamera', function () {
    return view('Color recognition using a video camera');
});

Route::middleware('authentication')->get('/eyeDisaesesDiagnosis', function(){
    return view('Diagnosis of eye diseases');
});
Route::get('/eyeDisaesesDiagnosis', function(){
    return view('Diagnosis of eye diseases');
});
Route::get('/resultOf_eyeDisaesesDiagnosis',[Usercontroller::class, 'resultOf_eyeDisaesesDiagnosis']);
Route::POST('eye',[Usercontroller::class, 'eyedetect']);

#Route::post('/eyeDisaesesDiagnosis','App\Http\Controllers\ServicesController@eyeDisaesesDiagnosis');


Route::middleware('authentication')->get('/makeAppointment', function(){
    return view('appointment');
});

Route::post('/appointment','App\Http\Controllers\ServicesController@appointment');


