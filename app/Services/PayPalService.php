<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PayPalService
{
    public function getAccessToken()
    {
        $response = Http::withBasicAuth(config('app.paypal.id'), config('app.paypal.secret'))
            ->asForm()
            ->post('https://api-m.sandbox.paypal.com/v1/oauth2/token', [
                'grant_type' => 'client_credentials'
            ]);

        if ($response->successful()) {
            return $response->json()['access_token'];
        }

        throw new \Exception('Failed to obtain PayPal access token');
    }
}