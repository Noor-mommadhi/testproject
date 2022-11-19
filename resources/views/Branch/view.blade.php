@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/display">Home</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h2 class="bg-dark text-white">Branch </h2>

                        <div class="card-header text-info">
                            <div class="card-body">



                                <table class="table ">
                                    <thead class="bg-cyan">
                                    <tr>
                                        <td>ID</td>
                                        <td>Branch Name</td>
                                        <td>Address</td>
                                        <td>City</td>
                                        <td>State</td>
                                        <td>Pincode</td>
                                        <td>Country</td>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->Address}}</td>
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
            </div></div></div>     </div>
@endsection
