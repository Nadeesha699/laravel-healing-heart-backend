<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Exception;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function viewAllDoctors()
    {
        try {
            $doctors = Doctor::all();

            $doctors->each(function ($doctor) {
                $doctor->image = base64_encode($doctor->image);
            });

            return response()->json(['success' => true, 'data' => $doctors], 200);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'data' => []], 500);
        }
    }
}
