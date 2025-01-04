<?php

use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\PasienController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::controller(PasienController::class)->group(function (){
    route::get('/pasien','index')->name('pasien');
});