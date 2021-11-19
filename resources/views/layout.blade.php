<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{'/css/style.min.css'}}">
    <title>Главная страница</title>
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')

    <script src="{{asset('js/script.min.js')}}"></script>
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
    @yield('script')
</body>
</html>
