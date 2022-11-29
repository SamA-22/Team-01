@extends("layouts.master")
@section("content")

        <!-----------------------View Users---------------------->
        <div class="content-table">
            <div class="table-box">
                <div class="content-box">
                    <p>Customers</p>
                    <br />
                    <table>

                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>User Type</th>
                        </tr>

                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->user_type }}</td>

                                <td>
                                    <p><a onclick="return confirm('Are you sure you want to delete this user?')"
                                            href="{{ url('delete_user', $data->id) }}"><span style="color: rgb(123, 0, 0)">Delete</span></a></p>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>


@endsection
