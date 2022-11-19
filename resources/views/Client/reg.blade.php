<!doctypehtml>
<html lang="eng">
<head>
    <title>Reg</title>

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
    }
    nav{
        height: 60px;
    }
    body{
        background-image:url("https://groupvisual.io/designinganalytics/wp-content/uploads/2016/08/dvux.png");
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
            <li><a href="/admin/dashboard">Dashboard</a></li>

        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="card">
        <div class="col-sm-5">

                        <h2 >REGISTER </h2>
                        <form method="post" action="{{route('reg.create')}}">
                            @csrf
                            <div class="form-group">
                                <label> Name:</label>
                                <input type="text" class="form-control" placeholder="Enter " name="name" value="{{old('name')}}">
                                <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{old('email')}}">
                                <span class="text-danger"> @error('email'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" class="form-control" placeholder="Enter pwd" name="password" >
                                <span class="text-danger"> @error('password'){{$message}} @enderror</span>
                            </div>

                            <button type="submit" class="btn btn-outline-warning">Submit</button>
                        </form>
            <a href="/log" class="text-bold text-black">Already register!!..cilck here</a>
        </div></div>
                    </div>
                </div>
</body>
</html>
