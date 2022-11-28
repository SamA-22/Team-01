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
                        <th>Prize</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->description }}</td>
                            <td>{{ $data->size }}</td>
                            <td>{{ $data->colour }}</td>
                            <td>{{ $data->prize }}</td>
                            <td> <img src="{{ asset('images') }}/{{ $data->image }}" style="width:150px" /></td>
                            <td>
                                <a class="products-btn" href="{{url('edit-product/'.$data->id) }}"><span style="color: #7b0000">Edit</span></a>
                                <a class="products-btn" onclick="return confirm('Are you sure you want to delete this user?')"
                                href="{{ url('delete_product', $data->id) }}"><span style="color: #7b0000">Delete</span></a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            @endsection
