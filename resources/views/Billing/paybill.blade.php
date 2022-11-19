<!doctypehtml>
<html lang="eng">
<head>
    <title> Shipping</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</head>
<style>
    body{
        background-image: url("https://cdn.searchenginejournal.com/wp-content/uploads/2020/03/the-top-10-most-popular-online-payment-solutions-5e9978d564973.png");
    }
    .card{

    }
    .pay{
        margin-left: 30%;
        margin-top: 0%;
    }

    .lo{
        margin-left: 100%;
    }

</style>
<body>
<div class="container ">
<a href="/log" class="btn btn-primary lo"><i class="fa fa-walking">logout</i> </a>

    <form method="post" action="{{route('makepay')}}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="card">
                        <div class="card-title title">
                            <h4 class="text-center">Make payment</h4>
                            <div class="card-body ">
                                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Enter branch" name="name" value="{{old('name')}}">
                    <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                </div><br>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}" >
                    <span class="text-danger"> @error('email'){{$message}} @enderror</span>
                </div><br>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" placeholder="Enter Phone" name="phone" value="{{old('phone')}}">
                    <span class="text-danger"> @error('phone'){{$message}} @enderror</span>
                </div><br>
                <div class="form-group">
                    <label>Product-Name:</label>
                    <input type="text" class="form-control" placeholder="Enter product" name="Pname" value="{{old('Pname')}}">
                    <span class="text-danger"> @error('Pname'){{$message}} @enderror</span>
                </div><br>
                <div class="form-group">
                    <label>Transcation type</label>
                    <select class="form-select" aria-label="Default select example" name="payment[]">
                        <option selected>Payment mode</option>
                        <option value="CASH" name="payment[]">CASH</option>
                        <option value="BANKING" name="payment[]">BANKING</option>
                        <option value="CARD" name="payment[]">CARD</option>
                        <option value="QR CODE" name="payment[]">QR CODE</option>
                    </select><br>
                 <div class="form-group">
                        <label>Amount</label>
                        <input type="number" class="form-control" placeholder="Enter Amount" name="amount" value="{{old('amount')}}">
                        <span class="text-danger"> @error('amount'){{$message}} @enderror</span>
                    </div><br>
<div class="row">
                  <div class="col-md-6">

                <button type="submit" class="btn btn-success now">   Pay Now  </button>       </div>
    <div class="col-md-6">
      <!--  <a href="/" class="btn btn-success pay" type="hidden"> Privious Payment</a></div>-->
</div></div></div>
                        </div> </div></div></div>  </div></form>


</div></body></html>


