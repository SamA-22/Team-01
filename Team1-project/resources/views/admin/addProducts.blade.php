@extends('layouts.master')
@section('content')
    <!-----------------------View Users---------------------->
    <div class="content-table">
        <div class="table-box">
            <div class="content-box">
                <p>Add New Product</p>

                <form class="login" method="POST" action="{{ url('add-product') }}">
                    @csrf

                    <input id="Name" name="Name" type="text" class="login__input" placeholder="Name">

                    <input id="description" name="description" type="text" class="login__input" placeholder="Description">

                    <input id="size" name="size" type="text" class="login__input" placeholder="Size">

                    <input id="Colour" name="Colour" type="text" placeholder="Colour">

                    <input id="Price" name="price" type="text" placeholder="Price">

                    <input id="image" name="imagePath" type="file">

                    <button class="btn-save" type="submit">
                        <span>{{ __('Save') }}</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
