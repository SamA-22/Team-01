@extends('layouts.app2')

@section('content')

  <br>
  <br>

  <section class="cards">
    <h2 class="title">All Products</h2>
    <div class="content">

      <div class="card">
        <div class="icon">
          <img src="{{ URL::asset('/images/pink.jpg') }}" alt="HDChoodie1" style="width:70%">
        </div>
        <div class="info">
          <h3>19.99 GBP</h3>
          <p>Description about the hoodie?</p>
          
          <form action="{{url('addToCart', $product->id)}}" method="POST">
            
            @csrf

            <input type="number" value="1" min="1" class="form-control" style="width: 100px">
            
            <br>

            <input type="submit" class="btn btn-primary" value="Add to cart">

          </form>

        </div>
      </div>


    </div>
  </section>

@endsection
