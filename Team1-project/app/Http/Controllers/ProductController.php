<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }
    
}
