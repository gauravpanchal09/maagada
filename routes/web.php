<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('patients', App\Http\Controllers\PatientController::class);
    Route::resource('hospitals', App\Http\Controllers\HospitalController::class);
    Route::resource('monthly-pregnancies', App\Http\Controllers\MonthlyPregnancyController::class);
    Route::resource('hospital-patients', App\Http\Controllers\HospitalPatientController::class);

    Route::prefix('tests')->group(function () {
        // ANC Tests
        Route::get('/anc', [App\Http\Controllers\AncTestController::class, 'create'])->name('anc.create');
        Route::post('/anc', [App\Http\Controllers\AncTestController::class, 'store'])->name('anc.store');
        Route::get('/anc/{id}', [App\Http\Controllers\AncTestController::class, 'edit'])->name('anc.edit');
        Route::put('/anc/{id}', [App\Http\Controllers\AncTestController::class, 'update'])->name('anc.update');

        // IN Tests
        Route::get('/in', [App\Http\Controllers\InTestController::class, 'create'])->name('in.create');
        Route::post('/in', [App\Http\Controllers\InTestController::class, 'store'])->name('in.store');
        Route::get('/in/{id}', [App\Http\Controllers\InTestController::class, 'edit'])->name('in.edit');
        Route::put('/in/{id}', [App\Http\Controllers\InTestController::class, 'update'])->name('in.update');
        Route::get('/in/{id}/image/{index}', [App\Http\Controllers\InTestController::class, 'getImageFile'])->name('in.displayImage');
        Route::delete('/in/{id}/image/{index}', [App\Http\Controllers\InTestController::class, 'deleteImageFile'])->name('in.deleteImage');

        // PL Tests
        Route::get('/pl', [App\Http\Controllers\PlTestController::class, 'create'])->name('pl.create');
        Route::post('/pl', [App\Http\Controllers\PlTestController::class, 'store'])->name('pl.store');
        Route::get('/pl/{id}', [App\Http\Controllers\PlTestController::class, 'edit'])->name('pl.edit');
        Route::put('/pl/{id}', [App\Http\Controllers\PlTestController::class, 'update'])->name('pl.update');
    });

    // Repots
    Route::prefix('reports')->group(function () {
        Route::get('/', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');
        Route::get('/{id}', [App\Http\Controllers\ReportController::class, 'generate'])->name('reports.generate');
        Route::get('/print/{id}', [App\Http\Controllers\ReportController::class, 'print'])->name('reports.print');
    });

    Route::post('/change-password', [App\Http\Controllers\Auth\ConfirmPasswordController::class, 'changePassword'])->name('auth.changePassword');
});
