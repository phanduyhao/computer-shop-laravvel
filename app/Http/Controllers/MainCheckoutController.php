<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainCheckoutController extends Controller
{
    public function buyProduct(Request $request)
    {
        $products = $request->input('products', []);

        // Store the product information in the session
        $cart = Session::get('cart', []);
        $cart = array_merge($cart, $products);
        Session::put('cart', $cart);

        return response()->json(['success' => true]);
    }

    public function ShowToCheckout(){
        $cart = Session::get('cart', []);

        return view('checkout.checkout', ['cart' => $cart],[
            'title' => 'Mua hàng'
        ]);
    }
}
