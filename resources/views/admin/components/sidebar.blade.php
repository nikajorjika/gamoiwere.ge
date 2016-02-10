<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="{{Request::segment(2) == 'news' ? 'active' : ''}}">
            <a href="{{route('admin.index')}}"><i class="fa fa-fw fa-newspaper-o"></i> სიახლეები</a>
        </li>
        <li class="{{Request::segment(2) == 'item' ? 'active' : ''}}">
            <a href="{{route('admin.item.show')}}"><i class="fa fa-fw fa-bars"></i> ნივთები</a>
        </li>
        <li class="{{Request::segment(2) == 'pages' ? 'active' : ''}}">
            <a href="{{route('admin.pages.show')}}"><i class="fa fa-fw fa-file"></i> გვერდები</a>
        </li>
        <li class="{{Request::segment(2) == 'slider' ? 'active' : ''}}">
            <a href="{{route('admin.slider.show')}}"><i class="fa fa-fw fa-sliders"></i> სლაიდერი</a>
        </li>
        <li class="{{Request::segment(2) == 'sideslider' ? 'active' : ''}}">
            <a href="{{route('admin.sideslider.show')}}"><i class="fa fa-fw fa-sliders"></i>პატარა სლაიდერი</a>
        </li>
        <li class="{{Request::segment(2) == 'library' ? 'active' : ''}}">
            <a href="{{route('admin.library.show')}}"><i class="fa fa-fw fa-book"></i> ბიბლიოთეკა</a>
        </li>
        <li class="{{Request::segment(2) == 'color' ? 'active' : ''}}">
            <a href="{{route('admin.color.show')}}"><i class="fa fa-fw fa-users"></i> ფერები</a>
        </li>
        <li class="{{Request::segment(2) == 'partner' ? 'active' : ''}}">
            <a href="{{route('admin.partner.show')}}"><i class="fa fa-fw fa-globe"></i> პარტნიორები</a>
        </li>
        <li class="{{Request::segment(2) == 'category' ? 'active' : ''}}">
            <a href="{{route('admin.category.show')}}"><i class="fa fa-fw fa-bars"></i> კატეგორია</a>
        </li>
        <li class="{{Request::segment(2) == 'album' ? 'active' : ''}}">
            <a href="javascript:;" data-toggle="collapse" data-target="#gallery"><i class="fa fa-fw fa-camera"></i> გალერეა <i class="fa fa-fw fa-angle-down"></i></a>
            <ul id="gallery" class="collapse in">
                <li class="{{Request::segment(2) == 'album' ? 'active' : ''}}">
                    <a href="{{route('admin.album.show')}}"><i class="fa fa-fw fa-folder-o"></i> ალბომები</a>
                </li>
            </ul>
        </li>
    </ul>
</div>