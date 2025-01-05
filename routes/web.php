<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\JanjitemuController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(TreatmentController::class)->group(function () {
    Route::get('/treatment', 'index')->name('treatment');
    Route::get('/treatment/tambah', 'create')->name('treatment.create');
    Route::get('/treatment/edit/{id}', 'edit')->name('treatment.edit');
    Route::post('/treatment/update/{id}', 'update')->name('treatment.update');
    Route::post('/treatment/save', 'store')->name('treatment.save');
    Route::get('/treatment/delete/{id}', 'destroy')->name('treatment.delete');
});

Route::controller(ObatController::class)->group(function () {
    Route::get('/obat', 'index')->name('obat');
    Route::get('/obat/tambah','create')->name('obat.create');
    Route::get('/obat/edit/{id}', 'edit')->name('obat.edit');
    Route::post('/obat/update/{id}', 'update')->name('obat.update');
    Route::post('/obat/save', 'store')->name('obat.save');
    Route::get('/obat/delete/{id}', 'destroy')->name('obat.delete');
});

Route::controller(DiagnosaController::class)->group(function () {
    Route::get('/diagnosa', 'index')->name('diagnosa');
    Route::get('/diagnosa/tambah','create')->name('diagnosa.create');
    Route::get('/diagnosa/edit/{id}', 'edit')->name('diagnosa.edit');
    Route::post('/diagnosa/update/{id}', 'update')->name('diagnosa.update');
    Route::post('/diagnosa/save', 'store')->name('diagnosa.save');
    Route::get('/diagnosa/delete/{id}', 'destroy')->name('diagnosa.delete');
});

Route::controller(JanjitemuController::class)->group(function () {
    Route::get('/janjitemu', 'index')->name('janji_temu');
    Route::get('/janjitemu/tambah','create')->name('janji_temu.create');
    Route::get('/janjitemu/edit/{id}', 'edit')->name('janji_temu.edit');
    Route::post('/janjitemu/update/{id}', 'update')->name('janji_temu.update');
    Route::post('/janjitemu/save', 'store')->name('janji_temu.save');
    Route::get('/janjitemu/delete/{id}', 'destroy')->name('janji_temu.delete');
});

Route::controller(PasienController::class)->group(function (){
    route::get('/pasien','index')->name('pasien');
});