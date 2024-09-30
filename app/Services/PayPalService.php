<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PayPalService
{
    protected $clientId;
    protected $clientSecret;
    protected $baseUrl;

    public function __construct()
    {
        // Configuración de PayPal
        $this->clientId = config('app.paypal.client_id');
        $this->clientSecret = config('app.paypal.client_secret');
        $this->baseUrl = 'https://api-m.sandbox.paypal.com';  // Cambia a la URL de producción si es necesario
    }

    // Obtener el token de autenticación
    public function getAccessToken()
    {
        $response = Http::asForm()->withBasicAuth($this->clientId, $this->clientSecret)
            ->post("{$this->baseUrl}/v1/oauth2/token", [
                'grant_type' => 'client_credentials',
            ]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        throw new \Exception('Error al obtener el token de acceso de PayPal');
    }

    // Crear la orden de PayPal
    public function createOrder($totalUSD)
    {
        $accessToken = $this->getAccessToken();

        $response = Http::withToken($accessToken)
            ->post("{$this->baseUrl}/v2/checkout/orders", [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    [
                        'reference_id' => 'default',
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => $totalUSD,
                        ],
                    ],
                ],
            ]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Error al crear la orden en PayPal');
    }

    // Capturar la orden de PayPal
    public function captureOrder($orderId)
    {
        $accessToken = $this->getAccessToken();

        $response = Http::withToken($accessToken)
            ->post("{$this->baseUrl}/v2/checkout/orders/{$orderId}/capture");

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Error al capturar la orden en PayPal');
    }
}
