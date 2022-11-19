<!doctypehtml>
<html lang="eng">
<head>
    <title>Billing</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</head>
<style>
    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {


        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }


    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
    }</style>

<body>

<div class="container card">
    <form action="{{route('bill.store')}}" method="post">
        @csrf
        <h3>Billing Address</h3>
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                <label ><i class="fa fa-user"></i> Full Name</label>
                <input type="text"  class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                <label ><i class="fa fa-envelope"></i> Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="Address" value="{{old('Address')}}">
                </div>
                <div class="form-group">
                    <label ><i class="fa fa-institution"></i> City</label>
                    <input type="text"   class="form-control" name="city" placeholder="Enter city " value="{{old('city')}}">
                </div>

            </div><br>

            <div class="col-6">

                <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" name="state"  class="form-control" placeholder="TN" value="{{old('state')}}">
                </div>
                <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" class="form-control" placeholder="Enter batch name" name="pincode" value="{{old('pincoded')}}">
                    <span class="text-danger"> @error('pincode'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="00000"  class="form-control" value="{{old('zip')}}">
                </div>
            </div>

        </div>
        <label>
            <input type="checkbox" checked="checked" name=""> Shipping address same as billing
        </label>
        <div class="row">



            <div class="col-md-12">
                <button type="submit" class="btn btn-default btn-primary">submit</button> <br>
                <a href="/cart" class="btn btn-primary"> BACK </a>
            </div></div></form>

</div>
</div></div>

</body></html>
