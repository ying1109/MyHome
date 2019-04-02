{{--<div class="sidebar">我是侧边栏</div>--}}
<div id="sidebar">
    <ul class="sidebar_menu">
        {{--首页--}}
        <li class="treeview">
            <a href="{{url('index')}}">
                <i class="fa fa-database fa-fw"></i><span>首页</span>
            </a>
        </li>

        {{--系统设置--}}
        <li class="treeview">
            <a>
                <i class="fa fa-cogs fa-fw"></i><span>系统设置</span><span class="angle"></span>
            </a>
            <ul class="treeview_menu">
                <li><a href="#"><i class="fa fa-photo fa-fw"></i>轮播图</a></li>
                <li><a href="#"><i class="fa fa-photo fa-fw"></i>意见反馈</a></li>
            </ul>
        </li>

        {{--用户管理--}}
        <li class="treeview">
            <a>
                <i class="fa fa-user-o fa-fw"></i><span>用户管理</span><span class="angle"></span>
            </a>
            <ul class="treeview_menu">
                <li><a href="{{url('admin/user/myAuth')}}"><i class="fa fa-photo fa-fw"></i>我的权限</a></li>
            </ul>
        </li>

    </ul>
</div>