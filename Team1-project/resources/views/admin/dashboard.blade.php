@extends('layouts.master')
@section('content')
    <!---------------Number of customers, Inventory and orders------------------->
    <div class="count-box">

        <div class="small-cards">
            <p class="statics">{{ $data }}<br /><span>Customers</span></p>
            <i class="fa fa-users small-cards-icon"></i>
        </div>
    </div>

    <div class="count-box">
        <div class="small-cards">
            <p class="statics">{{ $total }}<br /><span>Inventory</span></p>
            <i class="fa fa-shopping-bag small-cards-icon"></i>
        </div>
    </div>

    <div class="count-box">
        <div class="small-cards">
            <p><span>Orders</span></p>
            <i class="fa fa-tasks small-cards-icon"></i>
        </div>
    </div>


    <div class="clearfix"></div>
    <br /><br />

    <!-----------------------Table for Top selling items---------------------->
    <div class="content-table">
        <div class="table-box">
            <div class="content-box">
                <p>Top Selling Cloths</p>
                <br />
                <table>
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Colour</th>
                    </tr>

                    @foreach ($top as $top)
                        <tr>
                            <td>{{ $top->id }}</td>
                            <td>{{ $top->Name }}</td>
                            <td>{{ $top->price }}</td>
                            <td>{{ $top->Colour }}</td>
                        </tr>
                    @endforeach


                </table>
            </div>
        </div>
    </div>


@endsection
