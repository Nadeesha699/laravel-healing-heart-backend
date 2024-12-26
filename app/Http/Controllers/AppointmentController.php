<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function testing(){
        return response()->json(['success'=>true,'data'=>Appointment::all()],200);
    }

}

