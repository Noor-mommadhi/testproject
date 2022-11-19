@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-blue">Branch Details</h1> <br>
                        <button  class="bg-info text-white"><a href="/add-branch"> Add branch</a></button>
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
                    <td>Address</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Pincode</td>
                    <td>Country</td>
                    <td>Action</td>

                </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->Address}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->pincode}}</td>
                        <td>{{$user->country}}</td>
                        <td>
                            <a href="{{url('/b-edit/'.$user->id)}}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="{{url('/b-view/'.$user->id)}}" class="btn btn-warning"> <i class="fas fa-eye"></i></a>
                            <a href="{{url('/b-delete/'.$user->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </section> </div>
@endsection
