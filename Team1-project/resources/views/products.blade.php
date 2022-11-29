@extends('layouts.template')

@section('content')
    <br>
    <br>
    <section class="cards">
        <h2 class="title">Shop All Products</h2>
        <div class="content">

            @foreach ($products as $products)
                <div class="card">
                    <div class="icon">
                        <img src="{{ asset('images') }}/{{ $products->imagePath }}" alt="product" style="width:70%">
                    </div>
                    <div class="info">
                        <h3>{{ $products->price }}</h3>
                        <p>{{ $products->description }}</p>
                        <label for="size">Size</label>
                        <select id="size" name="Size">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                            <option value="XL">XL</option>
                        </select>

                        <form action="{{ url('addToCart', $products->id) }}" method="POST">
                            @csrf
                            <input type="number" value="1" min="1" class="form-control"
                            style="width: 50px; text-align:center" name="quantity">
                            <p><button></a>Add to Cart</button></p>
                            <input type="submit" class="btn btn-primary" value="Add to cart">
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
