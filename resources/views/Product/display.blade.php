@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product Details</h1> <br>
                        <button  class="bg-info text-white"><a href="/add-product"> Add Product</a></button>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/display">Home</a></li>
                            <li class="breadcrumb-item"><a href="/login">Logout</a></li>


                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div></div>

        <section style="padding-top: 60px">


            <table class="table table-striped">
                <thead class="bg-cyan">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Curency</td>
                    <td>Cost</td>
                    <td>Tax</td>
                    <td>Toatal cost</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->currency}}</td>
                        <td>{{$product->cost}}</td>
                        <td>{{$product->tax}}</td>
                        <td>{{$product->totalcost}}</td>

                        <td>
                            <a href="{{url('/p-edit/'.$product->id)}}" class="btn bg-gradient-gray"><i class="fas fa-edit"></i></a>
                            <a href="{{url('/p-view/'.$product->id)}}" class="btn btn-warning"> <i class="fas fa-eye"></i></a>
                            <a href="{{url('/p-delete/'.$product->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </section></div>
@endsection
