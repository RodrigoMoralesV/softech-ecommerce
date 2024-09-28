<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Services\CurrencyConverter;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    protected $currencyConverter;

    public function __construct(CurrencyConverter $currencyConverter)
    {
        $this->currencyConverter = $currencyConverter;
    }

    public function index(Request $request)
    {
        // Get the cart from the session
        $cart = $request->session()->get('cart', []);

        $total_neto = 0;
        $iva = 0;
        $total = 0;
        $cartItems = [];
        foreach ($cart as $productId => $item) {
            $product = Producto::find($productId);
            if ($product) {
                $productDetails = [
                    'id_producto' => $product->id_producto,
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

                $total_neto = $total;
                $iva = $total * 0.19; 
            }
        }
        $total = $total * 1.19;

        session([
            'total_neto' => $total_neto,
            'iva' => $iva,
            'total' => $total,
        ]);

        // Pass $cartItems and $total to the view
        return view('cart.cart', compact('cartItems', 'total', 'iva', 'total_neto'));
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

    // YA ESTA FUNCIONAL, PERO TOCA ARREGLAR LA VISTA
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
        }

        return back();
    }

    // Eliminar todos los productos agregados al carrito
    public function removeAllFromCart(Request $request)
    {
        $request->session()->forget('cart');

        return back();
    }

    public function payment($total)
    {
        try {
            $totalUSD = $this->currencyConverter->convertToUSD($total);

            return view('payment.payment',compact('totalUSD'));
        } catch (\Exception $e) {
            return back()->with('error', 'Error');
        }
    }
}
