<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class CartItemCount
{
    public function handle(Request $request, Closure $next)
    {
        $cart = Session::get('cart', []);
        $totalItems = array_reduce($cart, function ($carry, $item) {
            return $carry + $item['quantity'];
        }, 0);

        View::share('totalItems', $totalItems);

        return $next($request);
    }
}
