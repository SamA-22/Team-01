@extends('layouts.master')
@section('content')
    <!----------------------Edit products---------------------->
    <div class="content-table">
        <div class="table-box">
            <div class="content-box">
                <p>Update Product</p>

                <form class="login" method="POST" action="{{ url('update-product/' . $product->id) }}">
                    @csrf
                    @method('PUT')

                    <input id="name" name="Name" value="{{ $product->Name }}" type="text" class="login__input"
                        placeholder="Name">

                    <input id="description" name="description" value="{{ $product->description }}" type="text"
                        class="login__input" placeholder="Description">

                    <input id="size" name="Size" value="{{ $product->Size }}" type="text" class="login__input"
                        placeholder="Size">

                    <input id="colour" name="Colour"value="{{ $product->colour }}" type="text" placeholder="Colour">

                    <input id="price" name="price" value="{{ $product->price }}" type="text" placeholder="Price">

                    @if ($product->imagePath)
                        <img src="{{ asset('images') }}/{{ $product->imagePath }}" alt="Product Image" style="width:300px" />
                    @endif

                    <input id="image" name="imagePath" type="file">

                    <button class="btn-save" type="submit">
                        <span>{{ __('Update') }}</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
