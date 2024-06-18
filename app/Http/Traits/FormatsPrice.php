<?php

namespace App\Http\Traits;

trait FormatsPrice
{
    public static function formatPrice($price)
    {
        return '$ ' . number_format($price, 2, ',', '.');
    }
}