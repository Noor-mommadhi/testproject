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

            <form method="post" action="{{route('tax.create')}}" >
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>  Product Name:</label>
                            <input type="text" class="form-control" placeholder="Enter branch" name="name" value="{{old('name')}}">
                            <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Tax</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="tax" value="">
                            <span class="text-danger"> @error('tax'){{$message}} @enderror</span>
                        </div>
                        <button type="submit" class="btn btn-default bg-info">Apply</button> <br>
                    </div></div>
            </form>


        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
@endsection
