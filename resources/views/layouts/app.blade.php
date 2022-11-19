<html lang="en">
<head>
    <title>app</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">

    <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css?v=3.2.0")}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.footer')
</div>
</body>
</html>
