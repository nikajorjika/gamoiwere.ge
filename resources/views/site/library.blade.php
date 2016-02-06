@include('site.components.header')
        <!--Page Title-->
<section class="page-title" style="background-image:url({{url()}}/assets/site/images/parallax/news.gif);">
    <div class="auto-container">
        <div class="text-center">
            @if(L10nHelper::getLocale() == 'geo')
                <h4>გაიგე მეტი</h4>
                <h1>ბიბლიოთეკა</h1>
            @elseif(L10nHelper::getLocale() == 'eng')
                <h4>sdasd</h4>
                <h1>Library</h1>
            @else
                <h4>იხილეთ სურათები</h4>
                <h1>асдсада</h1>
            @endif
            <div class="icon"><img src="{{url()}}/assets/site/images/icons/icon-arrows.png" alt=""></div>
        </div>
    </div>
</section>
        <!--Sidebar Page-->
<div class="sidebar-page">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="blog-container">

                    <div class="row clearfix">
                        @foreach($library as $l)
                        <!--Blog Post-->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <article class="column-inner">
                                <figure class="image-box">
                                    <a href="{{url()}}/uploads/library/{{$l->filename}}"><img src="{{url()}}/uploads/library/{{$l->image}}" alt="" title="{{$l->title_geo}}"></a>
                                    <div class="post-options">
                                        <a href="{{url()}}/uploads/library/{{$l->filename}}" class="read-more"><span style="font-size: 45px; margin-right: 25px;" class="icon fa fa-download"></span></a>
                                    </div>
                                </figure>
                                @if(L10nHelper::getLocale() == 'geo')
                                <div class="lower-part">
                                    <div class="post-info">
                                       თარიღი  <a href="#">{{$l->created_at}}</a>
                                    </div>
                                    <div class="post-title"><h3><a href="#">{{L10nHelper::get($l,'title')}}</a></h3></div>
                                </div>
                                    @elseif(L10nHelper::getLocale() == 'eng')
                                    <div class="lower-part">
                                        <div class="post-info">
                                            Date <a href="#">{{$l->created_at}}</a>
                                        </div>
                                        <div class="post-title"><h3><a href="#">{{L10nHelper::get($l,'title')}}</a></h3></div>
                                    @else
                                            <div class="lower-part">
                                                <div class="post-info">
                                                   асдадс <a href="#">{{$l->created_at}}</a>
                                                </div>
                                                <div class="post-title"><h3><a href="#">{{L10nHelper::get($l,'title')}}</a></h3></div>
                                    @endif
                            </article>
                        </div>
                            @endforeach
                    </div>


                </section>
            </div>
        </div>
    </div>
</div>

@include('site.components.footer')