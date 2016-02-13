@include('site.components.header');
@include('site.components.mainbanner')
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-sm-4 col-md-3">
                <!-- specail -->
                <div class="block block-specail3">
                    <div class="block-head">
                        <h4 class="widget-title">მხოლოდ შენთვის</h4>
                    </div>
                    <div class="block-inner">
                        <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"768":{"items":1}}'>
                            @foreach($onlyur as $o)
                                <li class="product">
                                    <div class="product-container">
                                        <div class="product-left">
                                            <div class="product-thumb">
                                                <a class="product-img" href="{{url()}}/item/{{$o->slug}}/{{$o->id}}"><img src="{{url()}}/uploads/item/{{$o->main_image}}" alt="Product"></a>
                                                <a title="Quick View" href={{url()}}/item/{{$o->slug}}/{{$o->id}}" class="btn-quick-view">Quick View</a>
                                            </div>
                                            <div class="product-status">
                                                <span class="new">მხოლოდ შენთვის</span>
                                            </div>
                                        </div>
                                        <div class="product-right">
                                            <div class="product-name">
                                                <a href="{{url()}}/item/{{$o->slug}}/{{$o->id}}">{{$o->title_geo}}</a>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price">{{$o->price}} <span class="lari">a</span></span>
                                                {{--<span class="product-price-old"></span>--}}
                                            </div>
                                            <div class="product-button">
                                                <a class="btn-add-wishlist" title="Add to Wishlist" href="#">დაამატე კალათაში</a>
                                                <a class="button-radius btn-add-cart" title="Add to Cart" href="#">ყიდვა<span class="icon"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ./specail -->
                <!-- carousel-slide -->
                <div class="block carousel-slide">
                    <div class="block-head">
                        <h4 class="widget-title">დაზოგე</h4>
                    </div>
                    <div class="block-inner">
                        <ul class="list-slide kt-owl-carousel" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"768":{"items":1}}'>
                            @foreach($itemsave as $it)
                            <li>
                                <div class="image">
                                    <a href="{{url()}}/item/{{$it->slug}}/{{$it->id}}"><img src="{{url()}}/uploads/item/{{$it->main_image}}" alt="Banner"></a>
                                </div>
                                <div class="title">
                                    <a href="{{url()}}/item/{{$it->slug}}/{{$it->id}}">{{$it->title_geo}}</a>
                                </div>
                                <div class="button-action">
                                    <a href="#" class="button-radius">შეიძინე<span class="icon"></span></a>
                                </div>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ./carousel-slide -->
            </div>
            <div class="col-sm-8 col-md-9">
                <!-- new-arrivals -->
                <div class="block3 block-new-arrivals">
                    <div class="block-head">
                        <h3 class="block-title">ახალი დამატებულები</h3>
                        <ul class="nav-tab default">
                            @foreach($category as $c)
                            <li class="items-title"><a data-toggle="tab" href="#category-{{$c->id}}">{{$c->title_geo}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="block-inner">
                        <div class="tab-container ">
                            @foreach($category as $c)
                                <div id="category-{{$c->id}}" class="tab-panel items">
                                    <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"768":{"items":2},"1000":{"items":3},"1200":{"items":4}}'>
                                    @foreach($itemcar as $i)
                                        @if($c->id == $i->category_id)
                                <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}"><img src="{{url()}}/uploads/item/{{$i->main_image}}" alt="{{$i->title_geo}}"></a>
                                                        <a title="Quick View" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}" class="btn-quick-view">ნახვა</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="{{url()}}/item/{{$i->slug}}/{{$i->id}}">{{$i->title_geo}}</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">{{$i->price}} <span class="lari">b</span></span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="დაამატე კალათაში" href="{{url()}}/addtocart/{{$i->slug}}/{{$i->id}}">დაამატე კალათაში</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">ყიდვა<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                            <?php
                                                    foreach($itemcar as $key=>$i)
                                                    {
                                                        if($c->id == $i->category_id){
                                                        unset($itemcar[$key]);
                                                            }
                                                    }
                                            ?>
                                            @else
                                    </ul>
                                                @endif
                                    @endforeach
                                </div>
                                        @endforeach
                        </div>
                    </div>
                    <div class="block-footer">
                        <div class="text-center banner-hover">
                            <a href="#"><img src="{{url()}}/assets/site/data/option3/adv-avantage.png" alt="Banner"></a>
                        </div>
                    </div>
                </div>
                <!-- new-arrivals -->
                <!-- Hot deals -->
                <div class="block3 block-hotdeals">
                    <div class="block-head">
                        <h3 class="block-title">ცხელი შემოთავაზება</h3>
                        <a class="link-all" href="{{url()}}/hot">მაჩვენე ყველა</a>
                    </div>
                    <div class="block-inner">
                        <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"768":{"items":2},"1000":{"items":3},"1200":{"items":4}}'>
                            @foreach($itemshot as $i)
                                <li class="product">
                                    <div class="product-container">
                                        <div class="product-left">
                                            <div class="product-thumb">
                                                <a class="product-img" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}"><img src="{{url()}}/uploads/item/{{$i->main_image}}" alt="{{$i->title_geo}}"></a>
                                                <a title="Quick View" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}" class="btn-quick-view">ნახვა</a>
                                            </div>
                                        </div>
                                        <div class="product-right">
                                            <div class="product-name">
                                                <a href="#">{{$i->title_geo}}</a>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price">{{$i->price}}</span>
                                            </div>
                                            <div class="product-button">
                                                <a class="btn-add-wishlist" title="Add to Wishlist" href="{{url()}}/addtocart/{{$i->slug}}/{{$i->id}}">დაამატე კალათაში</a>
                                                <a class="button-radius btn-add-cart" title="Add to Cart" href="#">შეძენა<span class="icon"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Hot deals -->
                <!-- group banner -->
                {{--<div class="group-banner3 banner-hover">--}}
                    {{--<a class="banner banner1" href="#"><img src="{{url()}}/assets/site/data/option3/images01.png" alt="Banner"></a>--}}
                    {{--<a class="banner banner2" href="#"><img src="{{url()}}/assets/site/data/option3/images02.png" alt="Banner"></a>--}}
                    {{--<a class="banner banner3" href="#"><img src="{{url()}}/assets/site/data/option3/images03.png" alt="Banner"></a>--}}
                    {{--<a class="banner banner4" href="#"><img src="{{url()}}/assets/site/data/option3/images04.png" alt="Banner"></a>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 category-products">
            <div class="category-products">
                <ul class="products row">
                    @foreach($items as $i)
                        <li class="product col-xs-12 col-sm-4">
                            <div class="product-container">
                                <div class="inner row">
                                    <div class="product-left col-sm-6">
                                        <div class="product-thumb">
                                            <a class="product-img" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}"><img src="{{url()}}/uploads/item/{{$i->main_image}}"></a>
                                            <a title="Quick View" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}" class="btn-quick-view">Quick View</a>
                                        </div>
                                    </div>
                                    <div class="product-right col-sm-6">
                                        <div class="product-name">
                                            <a href="{{url()}}/item/{{$i->slug}}/{{$i->id}}">{{$i->title_geo}}</a>
                                        </div>
                                        <div class="price-box">
                                            <span class="product-price">{{$i->price}} <span class="lari">b</span></span>
                                        </div>
                                        <div class="product-button">
                                            <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                            <a class="button-radius btn-add-cart" title="Add to Cart" href="#">შეძენა<span class="icon"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <nav>
                <ul class="pagination">
                    {!! $items->render()!!}
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- banner -->
        <div class="block block-banner2">
            <div class="row">
                <div class="box-left col-sm-12 col-md-8">
                    <div class="col-sm-6">
                        <div class="inner">
                            <h4><i>DIVE INTO NEW</i></h4>
                            <h3><b>EXPERIENCES</b></h3>
                            <div class="content-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry everything in-between</p>
                            </div>
                            <a href="#" class="button-radius">Shop now<span class="icon"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <a href="#"><img src="{{url()}}/assets/site/data/option2/br-banner1.jpg" alt="Banner"></a>
                    </div>
                </div>
                <div class="box-right col-sm-12 col-md-4">
                    <div class="item i1">
                        <div class="row">
                            <div class="col-sm-8">
                                <h5><i>DIVE INTO NEW</i></h5>
                                <h5><b>EXPERIENCES</b></h5>
                                <div class="content-text">
                                    <p>Clever additions that make your smartphone even smarter.</p>
                                </div>
                                <a href="#" class="button-radius">Shop now<span class="icon"></span></a>
                            </div>
                            <div class="col-sm-4">
                                <a class="pull-right" href="#"><img src="{{url()}}/assets/site/data/option2/b8.png" alt="b8"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item i2" style="background: url('{{url()}}/assets/site/data/option2/b9.jpg') no-repeat right center;">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5><i>DIVE INTO NEW</i></h5>
                                <h5><b>EXPERIENCES</b></h5>
                                <a href="#" class="button-radius">Shop now<span class="icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./banner -->

    </div>
</div>
@include('site.components.footer')