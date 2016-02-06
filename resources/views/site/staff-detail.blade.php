@include('site.components.header')
<section class="page-title" style="background-image:url({{url()}}/assets/site/images/parallax/news.gif);">
    <div class="auto-container">
        <div class="text-center">
            <h4>{{$staff->position_geo}}</h4>
            <h1>{{$staff->full_name_geo}}</h1>
            <div class="icon"><img src="{{url()}}/assets/site/images/icons/icon-arrows.png" alt=""></div>
        </div>
        </div>
    </div>


<!--Profile Section-->
<section class="profile-section">
    <div class="auto-container">

        <div class="row clearfix">

            <!--Column-->
            <div class="col-md-3 col-sm-12 col-xs-12 column">
                <!--Member Info-->
                <article class="member-info wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <figure class="image"><img src="{{url()}}/uploads/staff/{{$staff->image}}" alt="{{$staff->position_geo}}"></figure>
                    <div class="member-title">
                        <h4>{{$staff->full_name_geo}}</h4>
                        <p><em>{{$staff->position_geo}}</em></p>
                    </div>
                    <ul class="info">
                        <li><strong>ტელეფონი:</strong>{{$staff->phone}}</li>
                        <li><strong>ელ-ფოსტა:</strong>  <a href="mailto:{{$staff->email}}">{{$staff->email}}</a></li>
                    </ul>
                </article>
            </div>

            <!--Column-->
            <div class="col-md-9 col-sm-12 col-xs-12 column">
                <h3>{{$staff->full_name_geo}}</h3>
                <div class="text">
                   {!! $staff->content_geo !!}
                </div>

                <!--Two Column-->
                <div class="two-column">
                    <div class="row clearfix">

                        <div class="col-md-6 col-sm-6 col-xs-12 column">

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--Boxed Section-->
<section class="boxed-section padd-top-20">
    <div class="auto-container">

        <!--Sec Title-->
        <div class="sec-title clearfix">

            <div class="pull-left">
                <div class="em-text">სოციალური ქსელები</div>
                <h2 class="heading-text">{{$staff->full_name_geo}}</h2>
            </div>
        </div>

        <!--Boxes Container-->
            <div class="clearfix">
                <a style="font-size: 45px; color: #ff9000;" href="{{$staff->fb}}" class="fa fa-facebook-f"></a>
                <a style="font-size: 45px; color: #ff9000; margin-left: 50px;" href="{{$staff->tw}}" class="fa fa-twitter"></a>
                <a style="font-size: 45px; color: #ff9000; margin-left: 50px;" href="{{$staff->li}}" class="fa fa-linkedin"></a>
            </div>
        </div>
</section>

@include('site.components.footer')