@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> ADMIN LOGIN</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">register here</a></li>
                            <li class="breadcrumb-item active"><a href="/select">Home</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('fail')}}
                        </div>
                    @endif
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}" >
                            <span class="text-danger"> @error('email'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label >Password:</label>
                            <input type="password" class="form-control"  placeholder="Enter password" name="password" >
                            <span class="text-danger"> @error('password'){{$message}} @enderror</span>
                        </div>
                        <button type="submit" class="btn btn-default"> Submit</button>
                        <br>

                        <a href=" /foregt">Forget Password</a>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
