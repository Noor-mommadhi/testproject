@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Details</h1> <br>
                        <button  class="bg-info text-white"><a href="/adds"> Add User</a></button>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/display">Home</a></li>
                            <li class="breadcrumb-item"><a href="/login">Logout</a></li>


                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div></div>
        <div class="row">

  <div class="col-md-6">


        <form class="from" action="{{route('search')}} " method="post">
@csrf
            <input type="text" name="name"  class="form-control" placeholder="search by name or email" >
            <input type="submit" value="search">

        </form>
  </div></div>
<section style="padding-top: 60px">


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
            <td>Country</td>
            <td>Pincode</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->Address}}</td>
                <td>{{$user->branch}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->state}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->pincode}}</td>
                <td>
                    <a href="{{url('/modify/'.$user->id)}}" class="btn btn-secondary"><i class="fas fa-eye"></i></a>
                    <a href="{{url('/see/'.$user->id)}}" class="btn btn-warning"> <i class="fas fa-edit"></i></a>
                    <a href="{{url('/delete/'.$user->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</section></div>
@endsection
