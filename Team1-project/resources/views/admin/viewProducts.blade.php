@extends('layouts.master')
@section('content')
    <!-----------------------View products---------------------->

    <div class="content-table">
        <div class="table-box">
            <div class="content-box">
                <p>Inventory</p>
                <br />
                <table>

                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Discription</th>
                        <th>Size</th>
                        <th>Colour</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->Name }}</td>
                            <td>{{ $data->description }}</td>
                            <td>{{ $data->Size }}</td>
                            <td>{{ $data->Colour }}</td>
                            <td>{{ $data->price }}</td>
                            <td> <img src="{{ asset('images') }}/{{ $data->imagePath }}" style="width:150px" /></td>
                            <td>
                                <a class="products-btn" href="{{ url('edit-product/' . $data->id) }}"><span
                                        style="color: #ffffff">Edit</span></a>
                                <a class="products-btn" onclick="return confirm('Are you sure you want to delete this user?')"
                                    href="{{ url('delete_product', $data->id) }}"><span
                                        style="color: #ffffff">Delete</span></a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            @endsection
