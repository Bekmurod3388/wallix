<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}" />
    <title>Главная страница</title>
</head>
<body>
@yield('header')
@yield('content')
{{$slot}}
@yield('footer')
<script src="{{asset('assets/js/script.min.js')}}"></script>
<script src="{{asset('asset/js/plugin/sweetalert/sweetalert2.min.js')}}"></script>
</body>
</html>
