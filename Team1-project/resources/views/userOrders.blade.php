@extends('layouts.template')

@section('content')
    <br>
    <br>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <section class="cards">
        <h2 class="title">Recent Orders</h2>
        <div class="icon">
            <i class="fa-solid fa-cart-arrow-down" style="color: rgb(84, 0, 0)"></i>
        </div>
        <div class="content">

            @foreach ($order as $order)
                <div class="card">

                    <div class="info">
                        <h3>Order Number: {{ $order->id }}</h3>
                        <p>Product Number: {{ $order->productid }}</p>
                        <p>Order Placed: {{ $order->created_at }}</p>
                        <p>Address: {{ $order->address }}</p>
                        <p>City: {{ $order->city }}</p>
                        <p>Post-code: {{ $order->postcode }}</p>
                        <p>Payment Method: Card </p>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
