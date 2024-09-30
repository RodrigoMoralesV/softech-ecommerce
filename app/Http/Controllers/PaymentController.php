<?php

namespace App\Http\Controllers;

use App\Services\PayPalService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paypal;

    public function __construct(PayPalService $paypal)
    {
        $this->paypal = $paypal;
    }

    public function createOrder(Request $request)
    {
        // Obtener el total en USD
        $totalUSD = $request->input('totalUSD');
        
        // Crear la orden en PayPal
        $order = $this->paypal->createOrder($totalUSD);

        // Retornar el ID de la orden a la vista
        return response()->json($order);
    }

    public function captureOrder($orderId)
    {
        // Capturar la orden de PayPal
        $order = $this->paypal->captureOrder($orderId);

        // Retornar la respuesta a la vista o procesar el éxito
        return response()->json($order);
    }
}
