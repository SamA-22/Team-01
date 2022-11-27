@extends('layouts.app2')

@section('content')

<div style="padding:250px;" align="center">
    <table>
        <tr style="background-color:lightgrey">
            <th style="padding: 20px; font-size:30px">Product Name</th>
            <th style="padding: 20px; font-size:30px">Quantity</th>
            <th style="padding: 20px; font-size:30px">Price</th>
            <th style="padding: 20px; font-size:30px">Image</th>
        </tr>
    @foreach($cart as $cart)
        <tr style="background-color: black">
            <th style="color: azure">{{$cart->product_title}}</th>
            <th style="color: azure">{{$cart->quantity}}</th>
            <th style="color: azure">{{$cart->price}}</th>
            <th style="color: azure"><img src="{{URL::asset($cart -> imagePath)}} alt=""></th>
        </tr>
    @endforeach
    </table>
</div>

@endsection