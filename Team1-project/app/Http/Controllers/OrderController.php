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
    public function processOrder(Request $request, $id)
    {
        $users = auth()->user();
        $product = product::find($id);
        $order = new Order;

        $order->userid = $users->id;
        $order->productid = $product->id;
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->price = $_SESSION['totalprice'];
        $order->save();
        return redirect('/')->with('status', "Product Added Successfully");
    }
}
