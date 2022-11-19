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
<body>
<section style="padding-top: 60px">

  <div class="row">
      <div class="col-md-6">
    <h3 class="text-center"> Shipping Details</h3>
  </div>
      <div class="col-md-6">
          <a href="/paybill" class="btn-success btn "><i class="fas fa-money-bill">Click to pay</i></a><br>
      </div></div><br>
    <table class="table table-striped table-bordered ">
        <thead class="bg-cyan bg-info">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Pincode</td>
            <td>ZIP</td>


        </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->Address}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->state}}</td>
                <td>{{$user->pincode}}</td>
                <td>{{$user->zip}}</td>

            </tr>

        @endforeach
        </tbody>
    </table>
</section> </div>
</body>
</html>
