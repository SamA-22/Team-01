<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;



class AdminController extends Controller
{
    //Function to view all website users
public function viewUsers(){
    $data=DB::select('select * from users WHERE user_type = "Customer"');
    return view('admin.users',compact('data'));
}


//Function to delete a user from the database
public function delete_user($id){
   $data= DB::delete('delete from users where id = ?',[$id]);
 return redirect()->back()->with('status','User has been deleted successfully');
}

//Function to show the total number of customer
public function show_total(){
    $total=Product::count();
    $data=User::count();
    $top=Product::all();
    return view('admin.dashboard',compact('total','data','top'));
}



}
