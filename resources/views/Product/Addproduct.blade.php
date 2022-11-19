
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fon">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <h1 class="m-0">Add PRODUCT</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/adds">Home</a></li>
                            <li class="breadcrumb-item"><a href="/login">Logout</a></li>

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

                    <form method="post" action="{{route('product.store')}}" >
                        @csrf
                        <div class="form-group">
                            <label>Product-Name:</label>
                            <input type="text" class="form-control" placeholder="Enter email" name="name" value="{{old('name')}}">
                            <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                        </div>
                        <div>
<div>
    <div class="form-group">
                            <label >CURRENCY</label>
    <select class="form-select" aria-label="Default select example" name="currency[]">

        <option value="INR"  name="payment[]" class="image ">INR </option>
        <option value="ERU" name="payment[]">ERU</option>
        <option value="USD" name="payment[]">USD</option>
        <option value="CAD" name="payment[]">CAD</option>
    </select><br>




                        <div class="form-group">


                                <!-- Defines a field for entering a number-->
                                <label>COST</label>
                             <input type="number" id="percent" oninput="percentage_1()"  class="form-control" placeholder="Enter cost" name="cost"value="{{old('cost')}}"><br>

                                <label>Tax</label>
                                    <input type="number" id="num"  oninput="percentage_1()" class="form-control" placeholder="tax" name="tax" value="{{old('tax')}}"> <br>



                                <!-- onclick event is to call the function when
                                    user click on the button-->
                                <label>Total cost</label>
                                <input type="number" id="value1" class="form-control" placeholder="TotalAmount" name="totalcost" value="{{old('total')}}"><br>



                            <label>visbilty</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="admin" id="flexCheckDefault" name="visibility[]">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="client" id="flexCheckDefault1" name="visibility[]">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    Client
                                </label>
                            </div>

                            </div>
                            <div>
                            </div>

                        </div>
                            </div>



                        <button type="submit" class="btn btn-default btn bg-cyan">Submit</button> <br>



                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection


<script>
function percentage_1() {

// Method returns the element of percent id
var cost1 = document.getElementById("percent").value;

// Method returns the element of num id
var tax1 = document.getElementById("num").value;

var total = ((parseInt(tax1) / 100) * parseInt(cost1)) + parseInt(cost1);


document.getElementById("value1").value=total;

}
</script>

@section('scripts')
    <script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
@endsection
