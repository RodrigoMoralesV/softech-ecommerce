<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getPayPalToken()
    {
        $paypalService = new PayPalService();
        return response()->json(['token' => $paypalService->getAccessToken()]);
    }
}
