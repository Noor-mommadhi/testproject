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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <h2>Update</h2>
        <form method="post" action="{{route('user.update')}}" >
            @csrf
            <div class="row">

            <div class="col-sm-6">

            <div class="form-group">
                <input type="hidden"  name="id" value="{{$user->id}}" />
                <label>Name:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="name" value="{{$user->name}}">
                <span class="text-danger"> @error('name'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{$user->email}}">
                <span class="text-danger"> @error('email'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password" value="{{$user->password}}">
                <span class="text-danger"> @error('password'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="number" class="form-control"  placeholder="Enter number" name="phone" value="{{$user->phone}}">
                <span class="text-danger"> @error('phone'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control"  placeholder="Enter Address" name="Address" value="{{$user->Address}}">
                <span class="text-danger"> @error('Address'){{$message}} @enderror</span>
            </div>
            </div>
                <div class="col-sm-6">
            <div class="form-group">
                <label>Branch</label>
                <input type="text" class="form-control"  placeholder="Enter branch" name="branch" value="{{$user->branch}}">
                <span class="text-danger"> @error('branch'){{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label>city</label>
                <input type="text" class="form-control"  placeholder="Enter city" name="city" value="{{$user->city}}">
                <span class="text-danger"> @error('city'){{$message}} @enderror</span>
            </div>    <div class="form-group">
                <label>state</label>
                <input type="text" class="form-control"  placeholder="Enter password" name="state" value="{{$user->state}}">
                <span class="text-danger"> @error('state'){{$message}} @enderror</span>
            </div>    <div class="form-group">
                <label>Pincode</label>
                <input type="number" class="form-control"  placeholder="Enter password" name="pincode" value="{{$user->pincode}}">
                <span class="text-danger"> @error('pincode'){{$message}} @enderror</span>
            </div>    <div class="form-group">
                <label>country</label>
                <input type="text" class="form-control"  placeholder="Enter password" name="country" value="{{$user->country}}">
                <span class="text-danger"> @error('country'){{$message}} @enderror</span>
            </div>

                </div>

            <button type="submit" class="btn btn-default bg-info">Update</button> <br>


    </div>
        </form>

    </div>

@endsection
