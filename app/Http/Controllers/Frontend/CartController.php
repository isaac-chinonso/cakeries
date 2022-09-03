<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    public function addtocart(Product $product)
    {
        $oldCart = request()->session()->has('cart') ? request()->session()->get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product);

        request()->session()->put('cart', $cart);

<<<<<<< HEAD
        return redirect()->intended(route('cart'));
=======
        return back();
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
    }

    public function cart()
    {
        $products = request()->session()->get('cart');
        return view('frontend.cart',compact('products'));
    }

    public function removeItem($id)
    {
        $oldCart = request()->session()->has('cart') ? request()->session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            request()->session()->put('cart', $cart);
        } else {
            request()->session()->forget('cart');
        }
        return redirect()->route('homepage');
    }
}
