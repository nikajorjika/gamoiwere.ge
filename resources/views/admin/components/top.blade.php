<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::admin()->user()->name}} <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{route('admin.logout')}}"><i class="fa fa-fw fa-power-off"></i> გამოსვლა</a>
            </li>
        </ul>
    </li>
</ul>