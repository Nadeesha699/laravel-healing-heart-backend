<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
   public function addAppointment(Request $request){
      $appointment =  new Appointment();
      $appointment->name 
   }

}

