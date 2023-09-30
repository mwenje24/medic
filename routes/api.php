<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermisionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PrescriptionsController;
use App\Http\Controllers\StaffsController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('permisions', PermisionsController::class)->only([
    'index', 'store'
]);

Route::resource('roles', RolesController::class)->only([
    'index', 'store'
]);


Route::apiResource('patients', PatientsController::class)->only([
    'index', 'store'
]);

Route::apiResource('staff', StaffsController::class)->only([
    'index', 'store'
]);

Route::apiResource('appointments', AppointmentsController::class)->only([
    'index', 'store'
]);

Route::apiResource('prescriptions', PrescriptionsController::class)->only([
    'index', 'store'
]);
