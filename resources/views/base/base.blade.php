@extends('layouts.admin')
@section('other_css')

@endsection

@section('content')

{{--头部  开始--}}
<div id="top">
    <div id="left">
        <span id="title">后台管理</span>
    </div>
    <i id="top_icon" class="fa fa-align-justify fa-2x"></i>
    <div id="right">
        <ul>
            <li><span>{$admin.nickname}</span></li>
            <li>
                <a href="{:U('Login/loginOut')}">
                    <i class="fa fa-power-off fa-lg"></i>
                    <span>退出</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{{--头部  结束--}}

{{--侧边栏  开始--}}
<div id="navMenubox">
    <ul class="navMenu">
        <li>
            <a href="{:U('Index/index')}" <if condition="CONTROLLER_NAME eq 'Index'"> class="active" </if> >
            <i class="fa fa-user"></i>
            <span>个人中心</span>
            </a>
        </li>

        <li>
            <a href="javascript:;" <if condition="CONTROLLER_NAME eq Poetry">class="active"</if> >
            <i class="fa fa-user"></i>
            <span class="">诗词文句</span>
            <span class="arrow"></span>
            </a>
            <ul class="sub-menu"  <if condition="CONTROLLER_NAME eq Poetry">style="display: block;"</if>>
        <li>
            <a href="{:U('Poetry/poem')}" <if condition="$url eq 'Poetry/poem'">class="active"</if>>诗词歌赋</a>
        </li>
        <li>
            <a href="{:U('Poetry/sentence')}" <if condition="$url eq 'Poetry/sentence'">class="active"</if>>佳句</a>
        </li>
    </ul>
</div>
{{--侧边栏  结束--}}

@endsection

@section('other_js')

<script type="text/javascript">

</script>

@endsection