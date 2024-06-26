<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function viewCart(Request $request)
    {
        // Obtener el carrito desde la sesión
        $cart = $request->session()->get('cart', []);

        $total = 0;
        $totalItems = 0;
        $cartItems = [];
        foreach ($cart as $id_producto => $item) {
            $product = Producto::find($id_producto);
            if ($product) {
                $productDetails = [
                    'image' => $product->galeria_imagenes_productos,
                    'name' => $product->descripcion_producto,
                    'price' => $product->valor_unitario,
                    'value' => $product->Descuento_producto,
                    'quantity' => $item['quantity'],
                    'id_producto' => $id_producto // Agregar el id_producto al detalle del producto
                ];
                $cartItems[] = $productDetails;

                $subtotal = ($product->valor_unitario - $product->Descuento_producto) * $item['quantity'];
                $total += $subtotal;
                $totalItems += $item['quantity']; // Contar la cantidad total de productos
            }
        }

        // Pasar $cartItems, $total y $totalItems a la vista
        return view('cart.cart', compact('cartItems', 'total', 'totalItems'));
    }

    public function addToCart(Request $request, $id_producto)
    {
        // Obtener el producto con el ID dado desde la base de datos
        $product = Producto::find($id_producto);

        // Verificar si el producto existe
        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado');
        }

        // Obtener el carrito desde la sesión o crear uno nuevo si no existe
        $cart = $request->session()->get('cart', []);

        // Verificar si el producto ya está en el carrito
        if (isset($cart[$id_producto])) {
            // Incrementar la cantidad del producto existente en el carrito
            $cart[$id_producto]['quantity']++;
        } else {
            // Agregar el producto al carrito con una cantidad de 1
            $cart[$id_producto] = [
                'quantity' => 1,
                'name' => $product->descripcion_producto,
                'price' => $product->valor_unitario
            ];
        }

        // Guardar el carrito actualizado en la sesión
        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function removeFromCart(Request $request, $id_producto)
    {
        // Obtener el carrito desde la sesión
        $cart = $request->session()->get('cart', []);
    
        // Verificar si el producto existe en el carrito
        if (isset($cart[$id_producto])) {
            // Eliminar el producto del carrito
            unset($cart[$id_producto]);
    
            // Guardar el carrito actualizado en la sesión
            $request->session()->put('cart', $cart);
    
            // Calcular el nuevo total y los elementos del carrito
            $total = 0;
            $totalItems = 0;
            $cartItems = [];
            foreach ($cart as $id => $item) {
                $product = Producto::find($id);
                if ($product) {
                    $productDetails = [
                        'id_producto' => $id,
                        'image' => $product->galeria_imagenes_productos,
                        'name' => $product->descripcion_producto,
                        'price' => $product->valor_unitario,
                        'value' => $product->Descuento_producto,
                        'quantity' => $item['quantity'],
                    ];
                    $cartItems[] = $productDetails;
    
                    $subtotal = ($product->valor_unitario - $product->Descuento_producto) * $item['quantity'];
                    $total += $subtotal;
                    $totalItems += $item['quantity'];
                }
            }
    
            return response()->json([
                'message' => 'Producto eliminado del carrito',
                'cartItems' => $cartItems,
                'total' => $total,
                'totalItems' => $totalItems
            ], 200);
        } else {
            return response()->json(['message' => 'Producto no encontrado en el carrito'], 404);
        }
    }
    
}
