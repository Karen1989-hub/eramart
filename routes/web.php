<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportControllers;
use App\Http\Controllers\TabloController;

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
    return view('testPage');
});
Route::any('/nermucum',[SportControllers::class,'nermucum'])->name('nermucum');
Route::get('/monitor2',[SportControllers::class,'monitor2'])->name('monitor2');
Route::post('/createMarzik',[SportControllers::class,'createMarzik'])->name('createMarzik');
Route::post('/updateMarzik',[SportControllers::class,'updateMarzik'])->name('updateMarzik');
Route::get('/deleteMarzik/{id}',[SportControllers::class,'deleteMarzik'])->name('deleteMarzik');
Route::get('/mrcavar1',[SportControllers::class,'mrcavar1'])->name('mrcavar1');
Route::get('/mrcavar2',[SportControllers::class,'mrcavar2'])->name('mrcavar2');
Route::get('/mrcavarglx',[SportControllers::class,'mrcavarglx'])->name('mrcavarglx');

Route::post('/katarox',[SportControllers::class,'katarox'])->name('katarox');
Route::post('/updateTablo',[TabloController::class,'updateTablo'])->name('updateTablo');
Route::get('/monitor',[SportControllers::class,'monitor'])->name('monitor');

Route::post('/chackMrcavar',[SportControllers::class,'chackMrcavar'])->name('chackMrcavar');

Route::post('/updateTimer',[SportControllers::class,'updateTimer'])->name('updateTimer');
Route::post('/stopTimer',[TabloController::class,'stopTimer'])->name('stopTimer');




