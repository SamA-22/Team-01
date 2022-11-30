<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index(Request $request)
    {

        $users = auth()->user();
        $id = $users->id;
        $product = Product::find($id);
        $order = new Order;

        $order->userid = $users->id;
        $order->productid = $product->id;
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->postcode = $request->input('post-code');

        $order->save();
        return redirect('/')->with('status', "Product Added Successfully");
    }

    public function viewOrders(){
        {
            $order = Order::where('userid', Auth::id())->get();
            return view('userOrders', compact('order'));
        }

    }

}
