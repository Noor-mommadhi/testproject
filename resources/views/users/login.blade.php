@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">LOGIN</h1>
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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
    <form method="post">


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
        <button type="submit" class="btn btn-default">Submit</button>
    <a href="/adds">New Users Register Here</a>
    </form>
</div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
@endsection
