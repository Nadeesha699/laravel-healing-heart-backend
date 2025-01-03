<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerFeedbackController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ServicesController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/view-all-doctors',[DoctorController::class,'viewAllDoctors']);
Route::get('/view-all-customer-feedback',[CustomerFeedbackController::class,'getAllCustomerFeedbacks']);
Route::post('/add-appointment',[AppointmentController::class,'addAppointment']);
Route::get('/view-all-services',[ServicesController::class,'viewAllServices']);
