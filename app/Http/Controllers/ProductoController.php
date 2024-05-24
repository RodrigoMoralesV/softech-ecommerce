<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function show($id_producto)
    {
        $producto = Producto::find($id_producto);

        return view('product.product',compact('producto'));
    }
}
