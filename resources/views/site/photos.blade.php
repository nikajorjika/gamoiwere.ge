@include('site.components.header')
        <!--Page Title-->
<section class="page-title" style="background-image:url({{url()}}/assets/site/images/parallax/news.gif);">
    <div class="auto-container">
        <div class="text-center">
            <h4>იხილეთ სურათები</h4>
            <h1>გალერეა</h1>
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

                    <div class="clearfix">
                        @foreach($photos as $p)
                            <div class="col-lg-2">
                            <figure class="image"><a href="{{url()}}/uploads/photos/{{$p->photo}}" class="lightbox-image"><img style="width: 100%;" src="{{url()}}/uploads/photos/{{$p->photo}}" alt=""></a></figure>
                                </div>
                        @endforeach
                    </div>


                </section>
            </div>
        </div>
    </div>
</div>

@include('site.components.footer')