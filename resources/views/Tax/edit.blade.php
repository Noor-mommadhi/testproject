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
        <h2>Update</h2>
        <form method="post" action="{{route('tax.update')}}">
            @csrf
            <div class="row">

                <div class="col-sm-6">

                    <div class="form-group">
                        <input type="hidden"  name="id" value="{{$tax->id}}" />
                        <label>  Product Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$tax->name}}">
                        <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Tax</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="tax" value="{{$tax->tax}}">
                        <span class="text-danger"> @error('email'){{$message}} @enderror</span>


                <button type="submit" class="btn btn-default bg-info">Update</button> <br>


                    </div></div></div>
        </form></div>

    </div

@endsection
