@extends('layouts.master')
@section('content')
    <!-----------------------View Profile---------------------->
    <div class="admin-profile">
        <div class="container">
            <div class="row">
                <div>
                    <div class="card">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" src="{{ URL::asset('/images/admin.png') }}" alt="admin dp">
                            <h3>{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="card-body">
                            <p class="mb-0"><strong class="pr-1">ID Number:</strong>{{ Auth::user()->id }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card ">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>My Profile</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Id Number</th>
                                    <td>{{ Auth::user()->id }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Name </th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Email Address</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">Phone Number</th>
                                    <td>{{ Auth::user()->phone }}</td>
                                </tr>
                                <tr>
                                    <th width="30%">User Type</th>
                                    <td>{{ Auth::user()->user_type }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
