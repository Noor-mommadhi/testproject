<!doctypehtml>
<html lang="eng">
<head>
    <title>Reg</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>


    img {

        width: 60px;
        height: 50px;
        margin-bottom: 100%;
        margin-right:900px;
    }
    nav{
        height: 60px;
    }
    body{
        background-image:url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/2327ffa4-20e9-41b6-b77c-462d26f7bfea/d3ecbzg-045f95bb-8610-4dbb-84ab-e1d08fb037d7.jpg");
    }

</style>
<body>
<nav class="navbar navbar-inverse nav">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Faveo_Logo.png" class="img-thumbnail float-right img" alt="faveo img">

            </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/home">Home</a></li>


        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">

        <div class="card col-md-6">
            @if(Session::has('fail'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('fail')}}
                </div>
            @endif
                <h2 >Login </h2>
                <form method="post" action="{{route('login.user')}}" >
                    @csrf
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
                    <button type="submit" class="btn btn-default"> Submit</button>
                    <a href="/reg" class="text-bold">REGISTER!!--CLICK HERE</a>

                </form>
            </div></div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>
