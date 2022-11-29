<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //A function to view all the products
    public function getIndex()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    //A function to view all the products in the admin panel
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
        if ($request->hasfile('imagePath')){
         $file=$request->file('imagePath');
         $ext=$file->getClientOriginalExtension();
         $filename=time().'.'.$ext;
         $file->move('images/', $filename);
         $product->imagePath=$filename;
     }
         $product->Name=$request->input('Name');
         $product->description=$request->input('description');
         $product->Size=$request->input('Size');
         $product->Colour=$request->input('Colour');
         $product->price=$request->input('price');
         $product->imagePath=$request->input('imagePath');
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
        if ($request->hasfile('imagePath')){
            $path='images/'.$product->image;

        if(File::exists($path)){
            File::delete($path);
        }
         $file=$request->file('imagePath');
         $ext=$file->getClientOriginalExtension();
         $filename=time().'.'.$ext;
         $file->move('images/', $filename);
         $product->imagePath=$filename;
     }
         $product->Name=$request->input('Name');
         $product->description=$request->input('description');
         $product->Size=$request->input('Size');
         $product->Colour=$request->input('Colour');
         $product->price=$request->input('price');
         $product->imagePath=$request->input('imagePath');
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


    public function chart(){
        return view('sizeChart');
    }

}
