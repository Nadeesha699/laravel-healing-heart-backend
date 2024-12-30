<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Exception;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
   public function addAppointment(Request $request)
   {
      try {
         $appointment =  new Appointment();
         $appointment->name = $request->name;
         $appointment->phone_number = $request->phone_number;
         $appointment->pet_type  = $request->pet_type;
         $appointment->appointment_date  = $request->appointment_date;
         $appointment->appointment_time  = $request->appointment_time;

         $appointment->save();
         return response()->json(['message' => 'Appointment scheduled successfully!', 'success' => true], 200);
      } catch (Exception $e) {
         return response()->json(['message' => $e->getMessage(), 'success' => false], 500);
      }
   }
}
