@extends('admin.admin_master')

<!-- section content diambil dari yield yang ada di admin master -->
@section('content')

<!-- <div class="main-panel"> -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data User <a href="{{ route('user.add') }}" style="float: right"
                            class="btn btn-rounded btn-success mb-5">Add User</a></h4>
                    <p class="card-description">
                        View <code>User Data</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Group
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allDataUser as $key => $user)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                        <!-- {{$user->id}} -->
                                    </td>
                                    <td>{{$user->usertype}}</td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{ route('users.delete', $user->id)}}" id="delete" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- INI CONTOH PADA TABEL LAIN -->
<!-- <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data User <a href="{{ route('user.add') }}" style="float: right"
                            class="btn btn-rounded btn-success mb-5">Add User</a></h4>
                    <p class="card-description">
                        View <code>User Data</code>
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead class="table-danger">
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Group
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allDataUser as $key => $user)
                                <tr>
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>{{$user->usertype}}</td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-info">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection
