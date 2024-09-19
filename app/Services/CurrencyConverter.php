<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CurrencyConverter
{
  protected $apiKey;
  protected $apiUrl;

  public function __construct()
  {
    $this->apiKey = config('app.currency_converter.api_key');
    $this->apiUrl = 'https://openexchangerates.org/api/latest.json?app_id=6b4e42de7bb24b888f1b1fcf6bdbcc1b'; 
  }

  public function convertToUSD($totalCOP)
  {
    // Obtener la tasa de conversión desde COP a USD
    $response = Http::get($this->apiUrl);

    if ($response->successful()) {
      // dd($response->json()); Esto es para ver la respuesta de la API
      $rate = $response->json()['rates']['COP']; // Obtener la tasa de COP a USD
      $totalUSD = $totalCOP / $rate;
      return round($totalUSD, 2); // Redondeamos a dos decimales
    }
    throw new \Exception('Error al obtener la tasa de conversión');
  }
}
