<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <i class="fa fa-circle text-success"></i>在线
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header"><h4><strong>测试相关</strong></h4></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>API接口测试</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('api.index')}}"><i class="fa fa-circle-o"></i>测试日志</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i><span>AB压测</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('ab.index')}}"><i class="fa fa-circle-o"></i>ab压测</a></li>
                </ul>
            </li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>