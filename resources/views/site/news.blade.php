@include('site.components.header')

        <!-- ./header -->
<div class="container">
    <div class="row">
        <div class="block block-breadcrumbs">
            <ul>
                <li class="home">
                    <a href="{{url()}}"><i class="fa fa-home"></i></a>
                    <span></span>
                </li>
                <li>სიახლეები</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <div class="block block-widget">
                    <div class="block-head">
                        <h5 class="widget-title">ახალი დამატებული</h5>
                    </div>
                    <div class="block-inner">
                        <ul class="list-posts-widget">
                            @foreach($sideNews as $s)
                            <li>
                                <div class="post-thumb">
                                    <a href="{{url()}}/news/{{$s->slug}}/{{$s->id}}"><img src="{{url()}}/uploads/news/{{$s->image}}" alt="{{$s->title_geo}}"></a>
                                </div>
                                <div class="post-info">
                                    <h5 class="entry_title"><a href="post.html">{{$s->title_geo}}</a></h5>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                <div class="block-sidebar-img banner-hover">
                    <a href="#"><img src="data/banner/2.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="col-sm-8 col-md-9">
                <h1 class="page-title">სიახლეები</h1>
                <div class="main-page">
                    <div class="page-content clearfix">
                        <ul class="blog-posts">
                            @foreach($news as $n)
                            <li class="post-item">
                                <article class="entry">
                                    <div class="entry-ci">
                                        <div class="entry-thumb image-hover2">
                                            <a href="{{url()}}/news/{{$n->slug}}/{{$n->id}}">
                                                <img src="{{url()}}/uploads/news/{{$n->image}}" alt="Blog">
                                            </a>
                                        </div>
                                        <h3 class="entry-title"><a href="{{url()}}/news/{{$n->slug}}/{{$n->id}}">{{$n->title_geo}}</a></h3>
                                        <div class="entry-excerpt">
                                           {!! $n->content_small_geo !!}
                                        </div>
                                        <div class="entry-more">
                                            <a class="button" href="{{url()}}/news/{{$n->slug}}/{{$n->id}}">იხილეთ ვრცლად</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                        <div class="sortPagiBar">
                            <div class="sortPagiBar-inner">
                                <nav>
                                    <ul class="pagination">
                                        {!! $news->render() !!}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.components.footer')