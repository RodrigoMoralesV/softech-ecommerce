<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function index(Request $request)
    {
        // Get the cart from the session
        $cart = $request->session()->get('cart', []);

        $total = 0;
        $cartItems = [];
        foreach ($cart as $productId => $item) {
            $product = Producto::find($productId);
            if ($product) {
                $productDetails = [
                    'image' => $product->galeria_imagenes_productos,
                    'descripcion_producto' => $product->descripcion_producto,
                    'valor_unitario' => $product->valor_unitario,
                    'descuento_producto' => $product->descuento_producto,
                    'stock' => $item['stock'],
                    // Ajustar el cálculo del total para incluir el descuento
                    'valor_total' => $product->valor_unitario * $item['stock'],
                ];
                $cartItems[] = $productDetails;

                $subtotal = $product->valor_unitario * $item['stock'];
                $total += $subtotal;
            }
        }

        // Pass $cartItems and $total to the view
        return view('cart.cart', compact('cartItems', 'total'));
    }

    public function addToCart(Request $request, $productId)
    {
        // Retrieve the product with the given ID from the database
        $product = Producto::find($productId);

        // Check if the product exists
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Get the cart from the session or create a new one if it doesn't exist
        $cart = $request->session()->get('cart', []);

        // Check if the product is already in the cart
        if (isset($cart[$productId])) {
            // Increment the quantity of the existing product in the cart
            $cart[$productId]['stock']++;
        } else {
            // Add the product to the cart with a quantity of 1
            $cart[$productId] = [
                'stock' => 1,
                'descripcion_producto' => $product->descripcion_producto,
                'valor_unitario' => $product->valor_unitario,
                'descuento_producto' => $product->descuento_producto,
            ];
        }

        // Store the updated cart in the session
        $request->session()->put('cart', $cart);

        return back();
    }

    // ESTA FUNCIONALIDAD NO HE IMPLEMENTADO
    public function removeFromCart(Request $request, $productId)
    {
        // Get the cart from the session
        $cart = $request->session()->get('cart', []);

        // Check if the product exists in the cart
        if (isset($cart[$productId])) {
            // Remove the product from the cart
            unset($cart[$productId]);

            // Store the updated cart in the session
            $request->session()->put('cart', $cart);

            return response()->json(['message' => 'Product removed from cart'], 200);
        } else {
            return response()->json(['message' => 'Product not found in cart'], 404);
        }
    }
}
