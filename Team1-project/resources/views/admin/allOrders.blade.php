@extends('layouts.master')
@section('content')
    <!-----------------------View Orders---------------------->
    <div class="content-table">
        <div class="table-box">
            <div class="content-box">
                <p>All Orders</p>
                <br />
                <table>
                    <tr>
                        <th>Order Number</th>
                        <th>Customer ID</th>
                        <th>Product ID</th>
                        <th>Ordered at</th>
                        <th>Customer Name</th>
                        <th>Customer Email Address</th>
                        <th>Delivery Address</th>
                        <th>City</th>
                        <th>Post Code</th>
                    </tr>

                    @foreach ($order as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->userid }}</td>
                            <td>{{ $order->productid }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->city }}</td>
                            <td>{{ $order->postcode }}</td>
                        </tr>
                    @endforeach

                </table>
            @endsection
