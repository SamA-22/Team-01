<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //A function to view the products page
    public function index(){
        return view ('products');
    }

    //A function to view all the products
    public function viewInventory(){
        $data=Product::all();
        return view('admin.viewProducts',compact('data'));
    }

     //A function to view the addProducts page in the admin panel
    public function addProducts(){
        return view ('admin.addProducts');
    }

    //A function to add a new product
    public function add(Request $request){
        $product=new Product();
        if ($request->hasfile('image')){
         $file=$request->file('image');
         $ext=$file->getClientOriginalExtension();
         $filename=time().'.'.$ext;
         $file->move('images/', $filename);
         $product->image=$filename;
     }
         $product->name=$request->input('name');
         $product->description=$request->input('description');
         $product->size=$request->input('size');
         $product->colour=$request->input('colour');
         $product->prize=$request->input('prize');
         $product->image=$request->input('image');
         $product->save();
       return redirect('addProducts')->with('status',"Product Added Successfully");
    }

    //A function to edit a product
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.editProducts', compact('product'));
    }


    //A function to edit and update a product
    public function update(Request $request, $id){
        $product = Product::find($id);
        if ($request->hasfile('image')){
            $path='images/'.$product->image;

        if(File::exists($path)){
            File::delete($path);
        }
         $file=$request->file('image');
         $ext=$file->getClientOriginalExtension();
         $filename=time().'.'.$ext;
         $file->move('images/', $filename);
         $product->image=$filename;
     }
         $product->name=$request->input('name');
         $product->description=$request->input('description');
         $product->size=$request->input('size');
         $product->colour=$request->input('colour');
         $product->prize=$request->input('prize');
         $product->image=$request->input('image');
         $product->update();
       return redirect('viewProducts')->with('status',"Product Updated Successfully");
    }

    //A function to delete a product
    public function delete($id){
        $data = Product::where('id', $id)->firstorfail()->delete();
        return redirect()->back()->with('status','Product has been deleted successfully');
    }


    //A function to view all orders
    public function viewAllOrders(){
        return view('admin.allOrders');
    }




}
