@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <h1 class="m-0">Payment List Data</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/adds">Home</a></li>

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

                    <form method="post" action="{{route('add.insert')}}" >
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
                            <label>Phone</label>
                            <input type="text" class="form-control"  placeholder="Phone Number" name="phone">
                            <span class="text-danger"> @error('phone'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Date-Range</label>
                            <input type="date" class="form-control"  placeholder="Enter Date" name="date">
                            <span class="text-danger"> @error('date'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Branch-Location</label>
                            <input type="text" class="form-control"  placeholder="Branch Location" name="branch">
                            <span class="text-danger"> @error('date'){{$message}} @enderror</span>
                        </div>


                        <button type="submit" class="btn btn-default">Submit</button> <br>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
@endsection
