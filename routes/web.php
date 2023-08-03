<?php

use Illuminate\Support\Facades\Route;

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
    return view('patient-registration');
});

use App\Http\Controllers\PatientController;

Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');

// Show the patient registration form
Route::get('/patient-registration', [PatientController::class, 'showForm']);

// Store patient data
// Route::post('/patient-registration', [PatientController::class, 'store']);
