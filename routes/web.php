<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CustomerFeedbackController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/view-all-doctors',[DoctorController::class,'viewAllDoctors']);
Route::get('/view-all-customer-feedback',[CustomerFeedbackController::class,'getAllCustomerFeedbacks']);
Route::post('/add-appointment',[AppointmentController::class,'addAppointment']);