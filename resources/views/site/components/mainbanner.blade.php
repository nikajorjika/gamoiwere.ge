
<!-- ./header -->
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-3">
                <!-- Block vertical-menu -->
                <div class="block block-vertical-menu">
                    <div class="vertical-head">
                        <h5 class="vertical-title">კატეგორიები</h5>
                    </div>
                    <div class="vertical-menu-content">
                        <ul class="vertical-menu-list">
                            @foreach($category as $c)
                            <li class="vertical-menu2">
                                <a class="parent" href="{{url()}}/category/{{$c->id}}">{{$c->title_geo}}</a>
                                <div class="vertical-dropdown-menu">
                                    <div class="vertical-groups">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="block-content-vertical-menu border banner-hover">
                                                    <a href="{{url()}}/category/{{$c->id}}"><img src="{{url()}}/uploads/category/{{$c->image}}" alt="{{$c->title_geo}}"></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="block-content-vertical-menu banner-hover">
                                                    <a href="{{url()}}/category/{{$c->id}}"><img src="{{url()}}/uploads/category/{{$c->small_image}}" alt="{{$c->title_geo}}"></a>
                                                </div>
                                                <div class="block-content-vertical-menu">
                                                    <div class="inner">
                                                        <p>{{$c->small_text}}</p>
                                                        <a href="{{url()}}/category/{{$c->id}}" class="button-radius">შეიძინე<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="block-content-vertical-menu border-left">
                                                    <h3 class="head">კატეგორიები</h3>
                                                    <div class="inner">
                                                        <ul class="vertical-menu-link">
                                                            @if(isset($c->Subcategory[0]))
                                                                @foreach($c->SubCategory as $s)
                                                                <li>
                                                                    <a href="{{url()}}/subcategory/{{$s->id}}">
                                                                        <span class="text">{{$s->title_geo}}</span>
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                                @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ./Block vertical-menu -->
            </div>
            <div class="col-sm-8 col-md-9 col-lg-7">
                <!-- Home slide -->
                <div class="block-slider">
                    <ul class="home-slider kt-bxslider">
                        @foreach($slider as $s)
                        <li><img src="{{url()}}/uploads/slider/{{$s->image}}" alt="{{$s->title_geo}}"></li>
                        @endforeach
                    </ul>
                </div>
                <!-- ./Home slide -->
            </div>
            <div class="col-sm-8 col-md-12 col-lg-2">
                <div class="block block-banner-owl kt-owl-carousel" ata-margin="0" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                    <div class="page-banner">
                        <ul class="list-banner">
                            @foreach($sideslider as $s)
                                    <li><a href="{{$s->url}}"><img src="{{url()}}/uploads/sideslider/{{$s->image}}" alt="banner"></a></li>

                            @endforeach

                        </ul>
                    </div>
                    <div class="page-banner">
                        <ul class="list-banner">
                            @foreach($sideslider as $s)
                                <li><a href="{{$s->url}}"><img src="{{url()}}/uploads/sideslider/{{$s->image}}" alt="banner"></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>