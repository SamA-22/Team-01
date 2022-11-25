@extends('layouts.master')
@section('content')
    <!---------------Number of customers, tasks and orders------------------->
    <div class="count-box">

        <div class="small-cards">
            <p class="statics">{{ $data }}<br /><span>Customers</span></p>
            <i class="fa fa-users small-cards-icon"></i>
        </div>
    </div>

    <div class="count-box">
        <div class="small-cards">
            <p><span>Orders</span></p>
            <i class="fa fa-shopping-bag small-cards-icon"></i>
        </div>
    </div>

    <div class="count-box">
        <div class="small-cards">
            <p><span>Inventory</span></p>
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
                        <th>Name</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Description</th>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


                </table>
            </div>
        </div>
    </div>

    <!-----------------------Total Sale---------------------->
    <div class="total-sale">
        <div class="total-sale-box">
            <div class="content-box">
                <p>Total Sale</p>
                <div class="circle-wrap">
                    <div class="circle">
                        <div class="mask full">
                            <div class="fill"></div>
                        </div>
                        <div class="mask half">
                            <div class="fill"></div>
                        </div>
                        <div class="inside-circle"> 70% </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
