<?php

use Illuminate\Support\Facades\Route;
use PatientController;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');


/*
Curent Login Routes for users/ doctors
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

	/////////////
	////Patients
	////////////
    Route::get('/patients', 'App\Http\Controllers\User\PatientController@index')->name('user.patients.index');



});