<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function processOrder(){
        $orders = new Order;
        $orders->price = $_SESSION["totalprice"];

        
    }
    
}
