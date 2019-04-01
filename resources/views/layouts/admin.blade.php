<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyHome</title>

    {{--CSS FILES--}}
    <link rel="stylesheet" href="{{asset('public/admin/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    @yield('other_css')

</head>
<body>

@yield('content')

</body>

{{--JS FILES--}}
<script type="text/javascript" src="{{asset('public/admin/js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/base.js')}}"></script>

@yield('other_js')

</html>