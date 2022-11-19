<!doctypehtml>
<html lang="eng">
<head>
    <title> Payment</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</head>
<style>
    body{
        background-image: url("https://pbs.twimg.com/ext_tw_video_thumb/1575519497749946368/pu/img/jV-bALzLVujQ1xI_?format=jpg&name=large");
    }
</style>
<body>
<section style="padding-top: 60px">


    <h3 class="text-center"> Payment Details</h3> <br>

    <table class="table table-striped table-bordered ">
        <thead class="bg-cyan bg-info">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td> Phone</td>
            <td>Product Name</td>
            <td>Payment Gateway</td>
            <td>Net Amount</td>



        </tr>
        </thead>
        <tbody>
        @foreach($user as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->Pname}}</td>
                <td>{{$user->payment}}</td>
                <td>{{$user->amount}}</td>


            </tr>

        @endforeach
        </tbody>
    </table>
</section> </div>
</body>
</html>
