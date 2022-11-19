@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-blue">Tax Details</h1> <br>
                        <button  class="bg-info text-white"><a href="/add-tax"> Add new tax</a></button>
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
                <thead class="bg-cyan text-bold">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Tax</td>
                    <td>Action</td>

                </tr>
                </thead>
                <tbody>
                @foreach($tax as $tax)
                    <tr>
                        <td>{{$tax->id}}</td>
                        <td>{{$tax->name}}</td>
                        <td>{{$tax->tax}}</td>

                        <td>
                            <a href="{{url('/t-edit/'.$tax->id)}}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{url('/t-view/'.$tax->id)}}" class="btn btn-warning"> <i class="fas fa-eye"></i></a>
                            <a href="{{url('/t-delete/'.$tax->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </section> </div>
@endsection
