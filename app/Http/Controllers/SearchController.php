<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->searchBar;
        $min_price = $request->min_price = 0; // Valor mínimo por defecto
        $max_price = $request->max_price =15000000; // Valor máximo por defecto

        $query = Producto::query();

        // Filtrar por nombre de producto
        if ($search) {
            $query->where('descripcion_producto', 'LIKE', "%$search%");
        }

        // Filtrar por rango de precio si se especifica
        if ($min_price !== null && $max_price !== null) {
            $query->whereBetween('valor_unitario', [$min_price, $max_price]);
        }

        // Obtener los productos filtrados
        $products = $query->get();

        // Obtener todas las categorías de los productos encontrados
        $categories = Categoria::whereIn('id_categoria', $products->pluck('categoria_id'))->get();

        return view('shop', compact('products', 'categories', 'search'));
    }

    public function filterByCategory(Request $request, $categoryId)
    {
        $search = $request->searchBar;

        $products = Producto::where('categoria_id', $categoryId)
            ->where('descripcion_producto', 'LIKE', "%$search%")
            ->get();

        // Obtener las categorías de los productos filtrados
        $categories = Categoria::whereIn('id_categoria', $products->pluck('categoria_id'))->get();

        return view('shop', compact('products', 'categories', 'search'));
    }

    public function index()
    {
        $products = Producto::all();
        $categories = Categoria::all();
        return view('shop', compact('products', 'categories'));
    }
}
