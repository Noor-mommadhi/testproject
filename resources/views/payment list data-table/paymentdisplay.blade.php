@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Payment List</h1> <br>
                        <button  class="bg-gradient-indigo "><a href="/pays" class="text-white"> ADD DATA</a></button>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/display">Home</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><section style="padding-top: 60px">

            <table class="table table-striped">
                <thead class="bg-gradient-indigo">
                <tr>
                     <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Date</td>
                    <td>Branch-location</td>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>  {{$user->phone}}</td>
                        <td>{{$user->date}}</td>
                        <td>{{$user->branch}}</td>


                    </tr>

                @endforeach
                </tbody>
            </table>
        </section></div>






@endsection
