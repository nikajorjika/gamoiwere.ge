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
                <li class="home">
                    <a href="{{route('site.news.show')}}">სიახლეები</a>
                    <span></span>
                </li>
                <li>{{$news->title_geo}}</li>
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
                                        <h5 class="entry_title center"><a href="post.html">{{$s->title_geo}}</a></h5>
                                    </div>
                                </li>
                            @endforeach
                            <li>
                        </ul>
                    </div>
                </div>
                <div class="block-sidebar-img banner-hover">
                    <a href="#"><img src="" alt="Banner"></a>
                </div>
            </div>
            <div class="col-sm-8 col-md-9">
                <div class="main-page">
                    <h1 class="page-title priv-info">{{$news->title_geo}}</h1>
                    <div class="page-content clearfix">
                        <article class="entry-detail">
                            <div class="entry-photo">
                                <img src="{{url()}}/uploads/news/{{$news->image}}" alt="{{$news->title_geo}}">
                            </div>
                            <div class="entry-content clearfix">
                                {!! $news->content_geo !!}
                               </div>
                        </article>
                        <div id="comments">
                            <h4 class="comments-title comment-info" >კომენტარები</h4>
                            <ol class="comment-list">
                                @foreach($comment as $c)
                                <li class="comment">
                                    {{--<div class="comment-avatar">--}}
                                        {{--<img src="data/avatar.jpg" alt="Avatar">--}}
                                    {{--</div>--}}
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <a  class="comment-author">{{$c->fullname}}</a>
                                        </div>
                                        <div class="comment-entry">
                                            <p>{{$c->comment}}</p>
                                        </div>
                                    </div>
                                </li>
                                    @endforeach
                            </ol>
                            <div class="comment-form">
                                {!! Form::open(['method' => 'post'],$news->id) !!}
                                <h3 class="comment-reply-title">დატოვეთ კომენტარი</h3><br>
                                <p>
                                    <label class="required">სახელი</label>
                                    <input type="text" name="fullname">
                                </p>
                                <p>
                                    <label class="required">ელ-ფოსტა</label>
                                    <input type="text" name="email">
                                </p>
                                <p>
                                    <label>ვებ-გვერდი</label>
                                    <input type="text" name="webpage">
                                </p>
                                <p>
                                    <label class="required">კომენტარი</label>
                                    <textarea rows="5" name="comment"></textarea>
                                </p>
                                <p>
                                    <input type="hidden" value="{{$news->id}}" name="news_id">
                                </p>
                                <p>
                                    <button type="submit" class="button">დატოვეთ კომენტარი</button>
                                </p>
                            </div>
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.components.footer')