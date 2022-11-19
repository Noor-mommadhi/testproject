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
                        <h2 class="bg-dark text-white"> Product Details </h2>

                        <div class="card-header text-info">
                            <h2>Product</h2>
                            <div class="card-body">



                                    <table class="table ">
                                        <thead class="bg-cyan">
                                        <tr>
                                            <td>ID</td>
                                            <td>Name</td>
                                            <td>Curency</td>
                                            <td>Cost</td>
                                            <td>Tax</td>
                                            <td>Toatal cost</td>

                                        </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->currency}}</td>
                                                <td>{{$product->cost}}</td>
                                                <td>{{$product->tax}}</td>
                                                <td>{{$product->totalcost}}</td>


                                            </tr>
                                        </tbody>

                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
            </div></div></div>     </div>
@endsection
