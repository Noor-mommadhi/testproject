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

                                <p>{{$user->name}}</p>
                                <p>{{$user->email}}</p>
                                <p>{{$user->phone}}</p>
                                <p>{{$user->Address}}</p>
                                <p>{{$user->branch}}</p>
                                <p>{{$user->city}}</p>
                                <p>{{$user->state}}</p>
                                <p>{{$user->pincode}}</p>
                                <p>{{$user->country}}</p>



                    </div>
                </div>
            </div>
        </div>
@endsection
