<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }
    public function addToCart(Request $request, $id)
    {
        /*(if (Auth::id()) {

            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->Name;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->imagePath = $product->imagePath;
            $cart->save();


            return redirect()->back()->with('message', 'Product added to Cart!');
        } else {
            return redirect('login');
        }
        */
        $user = auth()->user();
        $product = product::find($id);
        $cart = new cart;

        //$cart->name = $user->name;
        //$cart->phone = $user->phone;
        //$cart->address = $user->address;
        $cart->product_title = $product->Name;
        $cart->price = $product->price;
        $cart->quantity = $request->quantity;
        $cart->imagePath = $product->imagePath;
        $cart->save();
        return redirect()->back()->with('message', 'Product added to Cart!');
    }

    public function showCart()
    {
        //$cart=cart::where('phone', $user->phone);
        //$count = cart::where('phone', $user->phone)->count();
        $cart = cart::all();
        return view('cart', ['cart' => $cart]);
    }
}
