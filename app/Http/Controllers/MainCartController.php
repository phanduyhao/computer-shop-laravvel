<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class MainCartController extends Controller
{
    public function cart(){
        $carts = Cart::paginate(10);
        return view('cart.index',compact('carts'),[
            'title' => 'Giỏ hàng'
        ]);
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        // Chuyển hướng về trang danh sách post hoặc trang khác (tuỳ ý)
        return redirect()->back();
    }

    public function updateQuantities(Request $request)
    {
        $cartUpdates = $request->input('cart_updates');

        foreach ($cartUpdates as $cartUpdate) {
            $cart = Cart::findOrFail($cartUpdate['id']);
            $cart->quanity = $cartUpdate['quantity'];
            $cart->subtotal = $cart->quanity * $cart->price;
            $cart->save();
        }

        // Trả về dữ liệu mới cho cập nhật trên trang
        return response()->json(['success' => true]);
    }
}
