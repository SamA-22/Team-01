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
                        <h3>{{ $products->price }} GBP</h3>
                        <h2>{{ $products->Name }}</h2>
                        <p>{{ $products->description }}</p>
                        <label for="size">Size:{{ $products->Size }} </label><br></br>

                        <form action="{{ url('addToCart', $products->id) }}" method="POST">
                            @csrf
                            <input type="number" value="1" min="1" class="form-control"
                                style="width: 60px;height:35px; text-align:center" name="quantity">
                            <p><button></a>Add to Cart</button></p>

                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
