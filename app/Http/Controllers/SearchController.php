<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;

class SearchController extends Controller
{

    public function __construct()
    {
        $this->categoria = Categoria::where('estado', 1)->get();
        $this->marca = Marca::where('estado', 1)->get();
    }

    public function search(Request $request) {
        $search = $request->searchBar;
        $categoriaId = $request->categoria;
        $marcaId = $request->marca;
        $minPrice = $request->min_price;
        $maxPrice = $request->max_price;

        $query = Producto::query();
        $categorias = $this->categoria;
        $marcas = $this->marca;

        // Filtrar por categoría si se proporciona
        if ($categoriaId) {
            $query->where('categoria_id', $categoriaId);
        }

        // Filtrar por marca si se proporciona
        if ($marcaId) {
            $query->where('marca_id', $marcaId);
        }

        // Filtrar por precio si se proporcionan los valores
        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('valor_unitario', [$minPrice, $maxPrice]);
        }

        // Buscar por nombre de producto si se proporciona una búsqueda
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('descripcion_producto', 'LIKE', "%$search%")
                  ->orWhereHas('categoria', function($q) use($search) {
                      $q->where('nombre_categoria', 'LIKE', "%$search%");
                  })
                  ->orWhereHas('marca', function($q) use($search) {
                      $q->where('nombre_marca', 'LIKE', "%$search%");
                  });
            });
        }

        $products = $query->get();

        return view('shop', compact('products', 'search', 'categorias', 'marcas'));
    }

    public function index() {
        $products = Producto::where('estado', 1)->get();
        $categorias = $this->categoria;
        $marcas = $this->marca;

        return view('shop', compact('products', 'categorias', 'marcas'));
    }
}
