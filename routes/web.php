<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MaritalController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PraktekController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');

Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'register'])->name('register');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('karyawan', KaryawanController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('dokter', DokterController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('pasien', PasienController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('gender', GenderController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('unit', UnitController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('spesialis', SpesialisController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('praktek', PraktekController::class);
    });

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('marital', MaritalController::class);
    });

    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', AdminController::class);
    });
});
