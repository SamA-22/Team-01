<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        if (Auth::id()) {

            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;

            $cart->userid = $user->id;
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_id=$product->id;
            $cart->product_title = $product->Name;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->imagePath = $product->imagePath;
            $cart->save();


            return redirect()->back()->with('status', 'Product added to Cart!');
        } else {
            return redirect('login');
        }
        
        /*$user = auth()->user();
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
        */
    }

    public function showCart()
    {
        

        if(Auth::id()){
            $id=Auth::user()->id;
            $cart=cart::where('userid', '=', $id)->get();
            return view('cart', compact('cart'));  
            
        } else {
            return redirect('login');
        }
        

        
    }

    public function removeItemFromCart($id){
         $cart=cart::find($id);
         $cart->delete();

         return redirect()->back();

    }
}
