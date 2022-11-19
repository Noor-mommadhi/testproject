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
        <form method="post"action="{{route('product.update')}}" >
            @csrf
            <div class="row">

                <div class="col-sm-6">

                    <div class="form-group">
                       <input type="hidden"  name="id" value="{{$product->id}}" >
                        <div class="form-group">
                            <label>Product-Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$product->name}}">
                            <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                        </div>
                        <div>
                            <div>
                                <div class=" dropdown">
                                    <label >CURRENCY</label>

                                    <input type="text" class="form-control dropdown" placeholder="Enter currency" name="currency" value="{{$product->currency}}">
                                </div>
                                <span class="text-danger"> @error('cost'){{$message}} @enderror</span>
                            </div>
                            <div>

                                <div class="form-group">


                                    <!-- Defines a field for entering a number-->
                                    <label>COST</label>
                                    <input type="number" id="percent" oninput="percentage_1()"  class="form-control" placeholder="Enter cost" name="cost"value="{{$product->cost}}" ><br>

                                    <label>Tax</label>
                                    <input type="number" id="num"  oninput="percentage_1()" class="form-control" placeholder="tax" name="tax" value="{{$product->tax}}"> <br>



                                    <!-- onclick event is to call the function when
                                        user click on the button-->
                                    <label>Total cost</label>
                                    <input type="text" id="value1" class="form-control" placeholder="TotalAmount" name="totalcost" value="{{$product->totalcost}}"><br>





                                    <button type="submit" class="btn btn-default bg-info">Update</button> <br>
                </div>
                            </div> </div></div></div></div>
        </form></div>


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
