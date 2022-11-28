@extends('layouts.app2')

@section('content')

<div style="padding:250px;" align="center">
    <table>
        <tr style="background-color:lightgrey">
            <th style="padding: 20px; font-size:30px">Product Name</th>
            <th style="padding: 20px; font-size:30px">Quantity</th>
            <th style="padding: 20px; font-size:30px">Price</th>
            <th style="padding: 20px; font-size:30px">Image</th>
            <th style="padding: 20px; font-size:30px">Remove</th>
        </tr>
    <?php $runningtotal=0; $totalprice=0;?>

    @foreach($cart as $cart)
    <?php $price=$cart->price; $quantity=$cart->quantity?>
        <tr style="background-color: black">
            <th style="color: azure">{{$cart->product_title}}</th>
            <th style="color: azure"><input type="number" value={{$quantity}} min="1" class="form-control" style="width: 50px; text-align:center" name="quantity"></th>
            <th style="color: azure">{{$price}}</th>
            <th style="color: azure"><img style="width: 100px; height: 100px" src="{{URL::asset($cart -> imagePath)}} alt=""></th>
            <th style="color: azure"><a onclick="return confirm('Are you sure you want to remove this item?')" href="{{url('/removeFromCart', $cart->id)}}">Remove</a></th>
        </tr>
        

        <?php 
        $runningtotal = $price * $quantity; 
        $totalprice=$totalprice + $runningtotal; 
        ?>
    @endforeach

    </table>
    <div>
        <h3>Total Price: {{$totalprice}}</h1>
        <br></br>
        <a href"{{url('/checkout')}}"><button>Checkout</button></a>
    </div>
</div>

@endsection