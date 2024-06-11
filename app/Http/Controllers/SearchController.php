<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class SearchController extends Controller
{
    public function search(Request $request) {
        $search = $request->searchBar;

        $query = Producto::query();

        // Buscar por nombre de producto (nombre completro o algunas coincidencias)
        if ($request->filled(['descripcion_producto'])) {
            $query->whereAll(['descripcion_producto'],'LIKE', "%$search%");
        } else {
            $query->whereAny(['descripcion_producto'], 'LIKE', "%$search%");
        }

        // Buscar por nombre marca o categoria
        $query
            ->orWhereHas('categoria', function($query) use($search) {
            $query->whereAny(['nombre_categoria'], 'LIKE', "%$search%");
            })
            ->orWhereHas('marca', function($query) use($search) {
                $query->whereAny(['nombre_marca'], 'LIKE', "%$search%");
            });

        $products = $query->get();

        return view('shop', compact('products'));
    }

    public function index() {
        $products = Producto::all();

        return view('shop', compact('products'));
    }
}
