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
        $order->name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->price = $_SESSION['totalprice'];
    }
}
