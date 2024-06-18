<?php

namespace App\Http\Controllers;

use App\Http\Traits\FormatsPrice;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class IndexController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $productos = Producto::inRandomOrder()
                            ->take(16)
                            ->get();

        return view('index', compact('categorias', 'productos'))
        ->with('formatPrice', [FormatsPrice::class, 'formatPrice']);
    }
}