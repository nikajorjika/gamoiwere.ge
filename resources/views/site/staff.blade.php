@include('site.components.header')
<!--Page Title-->
<section class="page-title" style="background-image:url({{url()}}/assets/site/images/parallax/news.gif);">
    <div class="auto-container">
        <div class="text-center">
            <h4>ჩვენ ვფიქრობთ თქვენ აკეთებთ</h4>
            <h1>ჩვენი გუნდი</h1>
            <div class="icon"><img src="{{url()}}/assets/site/images/icons/icon-arrows.png" alt=""></div>
        </div>
    </div>
</section>


<!--Team Members Section-->
<section class="members-section filter-section">
    <div class="auto-container">

        <!--Sec Title-->
        <div class="sec-title clearfix">
            <div class="pull-left">
                <div class="em-text">ჩვენ ვართ თქვენთვის</div>
                <h2 class="heading-text">ჩვენი გუნდი</h2>
            </div>

            {{--<div class="pull-right">--}}
                {{--<ul class="filter-tabs clearfix">--}}
                    {{--<li class="filter" data-role="button" data-filter="all">ყველა</li>--}}
                    {{--@foreach($staff as $s)--}}
                    {{--<li class="filter" data-role="button" data-filter="{{$s->position_geo}}">{{$s->position_geo}}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}

        </div>

        <div class="filter-list row clearfix">
        @foreach($staff as $s)
            <!--Member-->
            <article class="col-md-3 col-sm-6 col-xs-12 member-column mix mix_all {{$s->position_geo}}">
                <div class="inner-box">
                    <figure class="image">
                        <a href="{{url()}}/staff/{{$s->slug}}/{{$s->id}}"><img src="{{url()}}/uploads/staff/{{$s->image}}" alt=""></a>
                        <div class="social-links">
                            <div class="plus-btn"></div>
                            <ul class="links">
                                <li><a href="{{$s->fb}}" class="fa fa-facebook-f"></a></li>
                                <li><a href="{{$s->tw}}" class="fa fa-twitter"></a></li>
                                <li><a href="{{$s->li}}" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </figure>
                    <div class="member-title">
                        <h4>{{$s->full_name_geo}}</h4>
                        <p><em>{{$s->position_geo}}</em></p>
                    </div>
                    <div class="member-desc">
                        <p>{!!str_limit($s->content_geo, 550)!!}</p>
                    </div>
                    <ul class="member-info">
                        <li><strong>ტელეფონი:</strong>  {{$s->phone}}</li>
                        <li><strong>ელ-ფოსტა:</strong>  <a href="mailto:{{$s->email}}">{{$s->email}}</a></li>
                    </ul>
                </div>
            </article>
                @endforeach

                        <!--Pagination-->

    </div>
        <div class="pager-outer">
            {!! $staff->render() !!}
        </div>

</section>

@include('site.components.footer')