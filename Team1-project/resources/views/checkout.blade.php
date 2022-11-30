<?php
session_start();
?>
@extends('layouts.template')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">

    </head>

    <body>

        <div class="container">

            <form action="{{ url('/orders/') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col">

                        <h3 class="title">billing address</h3>

                        <div class="inputBox">
                            <span>Full Name :</span>
                            <input type="text" name="name" placeholder="john deo" required>
                        </div>
                        <div class="inputBox">
                            <span>Email :</span>
                            <input type="email" name="email" placeholder="example@example.com">
                        </div>
                        <div class="inputBox">
                            <span>Address :</span>
                            <input type="text" name="address" placeholder="street - locality" required>
                        </div>
                        <div class="inputBox">
                            <span>City :</span>
                            <input type="text" name="city" placeholder="Birmingham" required>
                        </div>

                        <div class="flex">

                            <div class="inputBox">
                                <span>Post code :</span>
                                <input type="text" name="post-code" placeholder="123 456" required>
                            </div>
                        </div>

                    </div>

                    <div class="col">

                        <h3 class="title">payment</h3>

                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="{{ asset('images/cards') }}" alt="Accepted-cards">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" placeholder="mr. john deo" required>
                        </div>
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input type="number" placeholder="1111-2222-3333-4444" required>
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <input type="text" placeholder="january" required>
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="number" placeholder="2022" required>
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="1234" required>
                            </div>
                        </div>

                    </div>

                </div>
                <h2>Total Price: £
                    <?php
                    echo $_SESSION['totalprice'];
                    ?>

                </h2>
                <a href="{{ asset('/showCart') }}"><input type="" value="CANCEL" class="submit-btn"
                        style="text-align: center"></a>
                <input type="submit" value="PAY NOW" class="submit-btn"
                    onclick="alert('Order placed successfully! Thank you for shopping at HDC')">

            </form>

        </div>

    </body>

    </html>
@endsection
