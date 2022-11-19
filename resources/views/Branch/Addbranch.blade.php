@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <h1 class="m-0">Add Branch</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/display">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <div class="container">

            <form method="post" action="{{route('branch.insert')}}" >
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Branch Name:</label>
                            <input type="text" class="form-control" placeholder="Enter branch" name="name" value="{{old('name')}}">
                            <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="Address" value="{{old('Address')}}">
                            <span class="text-danger"> @error('Address'){{$message}} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>city</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="city" value="{{old('city')}}">
                            <span class="text-danger"> @error('city'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>state</label>
                            <input type="text" class="form-control" placeholder="Enter state" name="state" value="{{old('state')}}">
                            <span class="text-danger"> @error('state'){{$message}} @enderror</span>
                        </div>
                    <div class="form-group">
                        <label>Pincode</label>
                        <input type="number" class="form-control" placeholder="Enter batch name" name="pincode" value="{{old('pincoded')}}">
                        <span class="text-danger"> @error('pincode'){{$message}} @enderror</span>
                    </div>

                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" placeholder="Enter Country" name="country" value="{{old('Country')}}">
                            <span class="text-danger"> @error('Country'){{$message}} @enderror</span>
                        </div>


                    <button type="submit" class="btn btn-default">Register</button> <br>
                    </div></div>
                </form>


        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
@endsection
