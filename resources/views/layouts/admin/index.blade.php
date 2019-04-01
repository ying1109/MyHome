<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyHome</title>
    <link href="{{asset('admin/css/index.css')}}" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>

@include('layouts.admin.header')
@include('layouts.admin.sidebar')
{{--<div class="content">我是首页的内容</div>--}}
<div class="content">
    <section class="content-header">
        @section('content-header')
        @show
    </section>
    <section class="content">
        @section('content')
        @show
    </section>
</div>

</body>

<script src="{{asset('admin/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('admin/js/index.js')}}"></script>
</html>