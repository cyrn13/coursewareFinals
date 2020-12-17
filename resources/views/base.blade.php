<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>Lentrix Courseware</title>
</head>
<body>
@include('nav')

<div class="container main-container">
    @yield('content')

</div>

<footer>
    Copyright &copy; 2020. Lentrix Courseware, Inc. <br>
    All rights reserved.
</footer>

</body>
</html>