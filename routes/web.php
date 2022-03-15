<?php

use App\Http\Controllers\AppoinmentController;
use App\Http\Controllers\DoctorController;
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

Route::get('/', function () {
    return view('master');
});
Route::get('/doctor',[DoctorController::class, 'create'])->name('doctor');
Route::get('/doctor/index',[DoctorController::class, 'index'])->name('doctor.index');
Route::get('/doctor/edit/{id}',[DoctorController::class, 'edit'])->name('doctor.edit');
Route::post('/doctor/store',[DoctorController::class, 'store'])->name('doctor.store');
Route::post('/doctor/update/{id}',[DoctorController::class, 'update'])->name('doctor.update');
Route::post('/doctor/delete/{id}',[DoctorController::class, 'delete'])->name('doctor.delete');

Route::get('/appoinment',[AppoinmentController::class, 'index'])->name('appoinment');
Route::post('/getdoctor',[AppoinmentController::class, 'getdoctor']);
Route::post('/getfee',[AppoinmentController::class, 'getfee']);
Route::post('/gethide',[AppoinmentController::class, 'gethide']);
Route::post('/gedata',[AppoinmentController::class, 'getdata']);

