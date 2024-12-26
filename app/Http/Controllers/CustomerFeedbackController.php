<?php

namespace App\Http\Controllers;

use App\Models\CustomerFeedback;
use Exception;
use Illuminate\Http\Request;

class CustomerFeedbackController extends Controller
{
    public function getAllCustomerFeedbacks()
    {
        try {
            $customerFeedback = CustomerFeedback::all();
            $customerFeedback->each(function ($customerFeedbacks) {
                $customerFeedbacks->profile = base64_encode($customerFeedbacks->profile);
            });
            return response()->json(['success' => true, 'data' => $customerFeedback], 200);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'data' => []], 500);
        }
    }

}
