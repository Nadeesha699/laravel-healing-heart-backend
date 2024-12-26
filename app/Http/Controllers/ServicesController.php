<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Exception;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function viewAllServices()
    {
        try {
            return response()->json(['success' => true, 'data' => Services::all()], 200);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'data' => []], 500);
        }
    }
}
