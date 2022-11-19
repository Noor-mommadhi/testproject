@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <h1 class="m-0"> ADMIN REGISTRATION</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if(Session::has('admin.insert'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('admin.insert')}}
                        </div>
                    @endif

                    <form method="post" action="{{route('admin.insert')}}" >
                        @csrf
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter email" name="name" value="{{old('name')}}">
                            <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
                            <span class="text-danger"> @error('email'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control"  placeholder="Enter password" name="password">
                            <span class="text-danger"> @error('password'){{$message}} @enderror</span>
                        </div>

                        <button type="submit" class="btn btn-default">Register</button> <br>
                        <a href="/login">Already Registred!!Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
