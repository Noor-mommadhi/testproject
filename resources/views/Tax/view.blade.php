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
                        <h2 class="bg-dark text-white"> Tax Details </h2>

                        <div class="card-header text-info">

                            <div class="card-body">



                                <table class="table ">
                                    <thead class="bg-cyan">
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Tax</td>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>{{$tax->id}}</td>
                                        <td>{{$tax->name}}</td>
                                        <td>{{$tax->tax}}</td>



                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>     </div>
@endsection
