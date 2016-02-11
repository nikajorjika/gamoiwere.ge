@include('site.components.header')

        <!--Page Title-->
<section class="page-title" style="background-image:url({{url()}}/assets/site/images/parallax/news.gif);">
    <div class="auto-container">
        <div class="text-center">
            @if(L10nHelper::getLocale() == 'geo')
                <h4>გაქვთ შეკითხვები??</h4>
                <h1>კონტაქტი</h1>
            @elseif(L10nHelper::getLocale() == 'eng')
                <h4>sdasd</h4>
                <h1>Contact</h1>
            @else
                <h4>იხილეთ სურათები</h4>
                <h1>асдсада</h1>
            @endif
            <div class="icon"><img src="{{url()}}/assets/site/images/icons/icon-arrows.png" alt=""></div>

        </div>
    </div>
</section>

<!--Contact Us Section-->
<div class="sidebar-page">
    <div class="auto-container">

        <div class="row clearfix">

            <div class="col-md-9 col-sm-6 col-xs-12">
                <section class="contact-section">
                    <!--Sec Title-->
                    <div class="sec-title clearfix">
                        @if(L10nHelper::getLocale() == 'geo')
                        <div class="em-text"> გვიპოვეთ რუქაზე</div>
                        <h2 class="heading-text">მოგვწერეთ</h2>
                         @elseif(L10nHelper::getLocale() == 'eng')
                            <div class="em-text"> Find us on Google Maps</div>
                            <h2 class="heading-text">მოგვწერეთ</h2>
                            @else
                            <div class="em-text"> გვიპოვეთ რუქაზე</div>
                            <h2 class="heading-text">მოგვწერეთ</h2>
                            @endif
                    </div>

                    <!--Map Area-->
                    <div class="map-section">
                        <div class="map-container" id="map-location"></div>
                    </div>
                    <br>
                        @if(isset($message))
                            @if(L10nHelper::getLocale() == 'geo')
                        <h1>თქვენი შეტყობინება წარმატებით გაიგზავნა</h1>
                                @elseif(L10nHelper::getLocale() == 'eng')
                            <h1>თქვენი შეტყობინება წარმsadadasdadadasdasdadadატებით გაიგზავნა</h1>
                                @else
                            <h1>თქვენი შეტყობინება წარმasdadadadadadadaატებით გაიგზავნა</h1>
                                @endif
                    @endif
                    <div class="form">
                        @if(L10nHelper::getLocale() == 'geo')
                        {!! Form::open(['method' => 'post', 'files' => true]) !!}
                        {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-name"><span class="icon fa fa-user"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" name="username" id="your-name" placeholder=" სახელი">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-email"><span class="icon fa fa-envelope"></span></label></div>
                                        <div class="field-outer">
                                            <input type="email" name="email" id="your-email" placeholder=" ელ-ფოსტა">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-subject"><span class="icon fa fa-edit"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" name="subject" id="your-subject" placeholder=" საგანი">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <textarea name="message" placeholder=" შეტყობინება"></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                    <button class="hvr-bounce-to-right" type="submit" name="submit-form"> გაგზავნა &ensp; <span class="icon flaticon-envelope32"></span></button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        @elseif(L10nHelper::getLocale() == 'eng')
                            {!! Form::open(['method' => 'post', 'files' => true]) !!}
                            {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-name"><span class="icon fa fa-user"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" name="username" id="your-name" placeholder=" name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-email"><span class="icon fa fa-envelope"></span></label></div>
                                        <div class="field-outer">
                                            <input type="email" name="email" id="your-email" placeholder=" email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-subject"><span class="icon fa fa-edit"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" name="subject" id="your-subject" placeholder=" subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <textarea name="message" placeholder=" message"></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                    <button class="hvr-bounce-to-right" type="submit" name="submit-form"> Send &ensp; <span class="icon flaticon-envelope32"></span></button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            @else
                            {!! Form::open(['method' => 'post', 'files' => true]) !!}
                            {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-name"><span class="icon fa fa-user"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" name="username" id="your-name" placeholder=" асдасдадад">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-email"><span class="icon fa fa-envelope"></span></label></div>
                                        <div class="field-outer">
                                            <input type="email" name="email" id="your-email" placeholder=" асдасдасдасд">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <div class="icon-box"><label for="your-subject"><span class="icon fa fa-edit"></span></label></div>
                                        <div class="field-outer">
                                            <input type="text" name="subject" id="your-subject" placeholder=" асдасдададсд">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group-inner">
                                        <textarea name="message" placeholder=" асдададасд"></textarea>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                    <button class="hvr-bounce-to-right" type="submit" name="submit-form"> გაგზსადაავნა &ensp; <span class="icon flaticon-envelope32"></span></button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            @endif
                    </div>

                </section>
            </div>

            <!--Sidebar-->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <aside class="sidebar">
                    @if(L10nHelper::getLocale() == 'geo')
                    <!-- Contact Information -->
                    <div class="widget contact-info">
                        <div class="sidebar-title"><h3> საკონტაქტო ინფორმაცია</h3></div>
                        <div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
                        <ul class="info">
                            <li><strong>Email</strong> <a href="mailto:reange@email.com">reange@email.com</a></li>
                            <li><strong>Phone</strong> +49 123 456 789</li>
                            <li><strong>Fax</strong> +49 123 456 789</li>
                            <li><strong>Website</strong> <a href="http://www.envato.com">http://www.envato.com</a></li>
                        </ul>
                    </div>
                    @elseif(L10nHelper::getLocale() == 'eng')
                            <!-- Contact Information -->
                    <div class="widget contact-info">
                        <div class="sidebar-title"><h3> Contact Us</h3></div>
                        <div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
                        <ul class="info">
                            <li><strong>Email</strong> <a href="mailto:reange@email.com">reange@email.com</a></li>
                            <li><strong>Phone</strong> +49 123 456 789</li>
                            <li><strong>Fax</strong> +49 123 456 789</li>
                            <li><strong>Website</strong> <a href="http://www.envato.com">http://www.envato.com</a></li>
                        </ul>
                    </div>
                    @else
                            <!-- Contact Information -->
                    <div class="widget contact-info">
                        <div class="sidebar-title"><h3> საკონტაქტო ინფორმაცია</h3></div>
                        <div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
                        <ul class="info">
                            <li><strong>Email</strong> <a href="mailto:reange@email.com">reange@email.com</a></li>
                            <li><strong>Phone</strong> +49 123 456 789</li>
                            <li><strong>Fax</strong> +49 123 456 789</li>
                            <li><strong>Website</strong> <a href="http://www.envato.com">http://www.envato.com</a></li>
                        </ul>
                    </div>
                    @endif
                </aside>


            </div>
            <!--Sidebar-->

        </div>
    </div>
</div>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{url()}}/assets/site/js/googlemaps.js"></script>
@include('site.components.footer')