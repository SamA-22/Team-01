@extends('layouts.app')

@section('content')
    <br>
    <br>

    <section class="cards">
        <h2 class="title">All Products</h2>
        <div class="content">

            @foreach ($products as $products)
                <div class="card">
                    <div class="icon">
                        <img src="{{ URL::asset($products->imagePath) }}" alt="HDChoodie1" style="width:70%">
                    </div>
                    <div class="info">
                        <h2>{{ $products->Name }}</h2>
                        <h3>{{ $products->price }}</h3>
                        <p>{{ $products->description }}</p>

                        <form action="{{ url('addToCart', $products->id) }}" method="POST">

                            @csrf

                            <input type="number" value="1" min="1" class="form-control"
                                style="width: 50px; text-align:center" name="quantity">

                            <input type="submit" class="btn btn-primary" value="Add to cart">

                        </form>


                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
