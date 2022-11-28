@extends('layouts.master')
@section('content')
    <!-----------------------View Users---------------------->
    <div class="content-table">
        <div class="table-box">
            <div class="content-box">
                <p>Add New Product</p>

                <form class="login" method="POST" action="{{ url('add-product') }}">
                    @csrf

                    <input id="name" name="name" type="text" class="login__input" placeholder="Name">

                    <input id="description" name="description" type="text" class="login__input" placeholder="Description">

                    <input id="size" name="size" type="text" class="login__input" placeholder="Size">

                    <input id="colour" name="colour" type="text" placeholder="Colour">

                    <input id="prize" name="prize" type="text" placeholder="Prize">

                    <input id="image" name="image" type="file">

                    <button class="btn-save" type="submit">
                        <span>{{ __('Save') }}</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>

            </div>
        </div>
    </div>
@endsection
