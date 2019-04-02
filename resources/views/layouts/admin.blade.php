<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyHome</title>
    <link href="{{asset('admin/css/index.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/bootstrap-3.3.7-dist/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" />

    @section('other-css')
    @show
</head>
<body>

@include('layouts.header')
@include('layouts.sidebar')
{{--<div class="content">我是首页的内容</div>--}}
<div id="content">
    <section class="content-header">
        @section('content-header')
        @show
    </section>
    <section class="content">
        @section('content')
        @show
    </section>
    {{--<h1>我是内容</h1>--}}
</div>

</body>

<script src="{{asset('admin/js/jquery-3.3.1.js')}}"></script>
<script src="{{asset('admin/bootstrap-3.3.7-dist/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/js/index.js')}}"></script>

@section('other-js')
@show
</html>