@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">view -single -user</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h2 class="bg-dark text-white"> user detail </h2>

                        <div class="card-header text-info">
                            <h2>User</h2>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead class="bg-cyan">
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                        <td>Address</td>
                                        <td>Branch</td>
                                        <td>City</td>
                                        <td>State</td>
                                        <td>pincode</td>
                                        <td>country</td>

                                    </tr>
                                    </thead>
                                    <tbody>
<tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->Address}}</td>
                                <td>{{$user->branch}}</td>
                                <td>{{$user->city}}</td>
                                <td>{{$user->state}}</td>
                                <td>{{$user->pincode}}</td>
                                <td>{{$user->country}}</td>


</tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
@endsection
