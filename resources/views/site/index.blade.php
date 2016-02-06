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
                        <h4 class="widget-title">big save</h4>
                    </div>
                    <div class="block-inner">
                        <ul class="list-slide kt-owl-carousel" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"768":{"items":1}}'>
                            <li>
                                <div class="image">
                                    <a href="#"><img src="{{url()}}/assets/site/data/option3/b5.jpg" alt="Banner"></a>
                                </div>
                                <div class="title">
                                    <a href="#">Unleash the Fun with the Lenovo S60</a>
                                </div>
                                <div class="button-action">
                                    <a href="#" class="button-radius">SHOP NOW<span class="icon"></span></a>
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <a href="#"><img src="{{url()}}/assets/site/data/option3/b6.jpg" alt="Banner"></a>
                                </div>
                                <div class="title">
                                    <a href="#">Unleash the Fun with the Lenovo S60</a>
                                </div>
                                <div class="button-action">
                                    <a href="#" class="button-radius">SHOP NOW<span class="icon"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./carousel-slide -->
                <!-- Top review -->
                <div class="block block-top-review">
                    <div class="block-head">
                        <h4 class="widget-title">Top review</h4>
                    </div>
                    <div class="block-inner">
                        <div class="kt-owl-carousel" data-loop="true" data-nav="true" data-items="1">
                            <ul class="list-product">
                                <li class="product active">
                                    <a class="product-name" href="#"><span class="order">1</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p3.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">2</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p4.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">3</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p5.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">4</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p6.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">5</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p7.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-product">
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">6</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p8.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">7</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p9.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">8</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p10.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">9</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p10.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <a class="product-name" href="#"><span class="order">10</span>Cotton Lycra Leggings</a>
                                    <div class="product-info">
                                        <div class="price-box">
                                            <span class="product-price">$139.98</span>
                                            <span class="product-price-old">$169.00</span>
                                        </div>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="product-img">
                                            <a href="#"><img src="{{url()}}/assets/site/data/option3/p12.jpg" alt="Product"></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ./Top review -->
            </div>
            <div class="col-sm-8 col-md-9">
                <!-- new-arrivals -->
                <div class="block3 block-new-arrivals">
                    <div class="block-head">
                        <h3 class="block-title">ახალი დამატებულები</h3>
                        <ul class="nav-tab default">
                            @foreach($category as $c)
                            <li><a data-toggle="tab" href="#category-{{$c->id}}">{{$c->title_geo}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="block-inner">
                        <div class="tab-container">
                            <div id="category-{{$c->id}}" class="tab-panel">
                                <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"768":{"items":2},"1000":{"items":3},"1200":{"items":4}}'>
                                    @foreach($category1 as $i)
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
                                                        <a class="btn-add-wishlist" title="დაამატე კალათაში" href="#">დაამატე კალათაში</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">ყიდვა<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="category-1" class="tab-panel">
                                <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"768":{"items":2},"1000":{"items":3},"1200":{"items":4}}'>
                                    @foreach($category2 as $i)
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
                                                        <a class="btn-add-wishlist" title="დაამატე კალათაში" href="#">დაამატე კალათაში</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">ყიდვა<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"768":{"items":2},"1000":{"items":3},"1200":{"items":4}}'>
                                    <li class="product">
                                        <div class="product-container">
                                            <div class="product-left">
                                                <div class="product-thumb">
                                                    <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p21.jpg" alt="Product"></a>
                                                    <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product-right">
                                                <div class="product-name">
                                                    <a href="#">Cotton Lycra Leggings</a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="product-price">$139.98</span>
                                                    <span class="product-price-old">$169.00</span>
                                                </div>
                                                <div class="product-button">
                                                    <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                    <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                    <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <div class="product-left">
                                                <div class="product-thumb">
                                                    <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p22.jpg" alt="Product"></a>
                                                    <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product-right">
                                                <div class="product-name">
                                                    <a href="#">Cotton Lycra Leggings</a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="product-price">$139.98</span>
                                                    <span class="product-price-old">$169.00</span>
                                                </div>
                                                <div class="product-button">
                                                    <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                    <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                    <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <div class="product-left">
                                                <div class="product-thumb">
                                                    <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p23.jpg" alt="Product"></a>
                                                    <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product-right">
                                                <div class="product-name">
                                                    <a href="#">Cotton Lycra Leggings</a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="product-price">$139.98</span>
                                                    <span class="product-price-old">$169.00</span>
                                                </div>
                                                <div class="product-button">
                                                    <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                    <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                    <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <div class="product-left">
                                                <div class="product-thumb">
                                                    <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p24.jpg" alt="Product"></a>
                                                    <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product-right">
                                                <div class="product-name">
                                                    <a href="#">Cotton Lycra Leggings</a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="product-price">$139.98</span>
                                                    <span class="product-price-old">$169.00</span>
                                                </div>
                                                <div class="product-button">
                                                    <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                    <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                    <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
                        <a class="link-all" href="#">მაჩვენე ყველა</a>
                    </div>
                    <div class="block-inner">
                        <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"768":{"items":2},"1000":{"items":3},"1200":{"items":4}}'>
                            @foreach($itemshot as $i)
                                <li class="product">
                                    <div class="product-container">
                                        <div class="product-left">
                                            <div class="product-thumb">
                                                <a class="product-img" href="{{url()}}/item/item/{{$i->slug}}/{{$i->id}}"><img src="{{url()}}/uploads/item/{{$i->main_image}}" alt="{{$i->title_geo}}"></a>
                                                <a title="Quick View" href="{{url()}}/item/item/{{$i->slug}}/{{$i->id}}" class="btn-quick-view">ნახვა</a>
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
                                                <a class="btn-add-wishlist" title="Add to Wishlist" href="#">დაამატე კალათაში</a>
                                                <a class="button-radius btn-add-cart" title="Add to Cart" href="#">შეძენა<span class="icon"></span></a>
                                            </div>
                                        </div>
                                        <div class="product-count-down">
                                            <span class="countdown-lastest" data-y="2016" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Hot deals -->
                <!-- group banner -->
                <div class="group-banner3 banner-hover">
                    <a class="banner banner1" href="#"><img src="{{url()}}/assets/site/data/option3/images01.png" alt="Banner"></a>
                    <a class="banner banner2" href="#"><img src="{{url()}}/assets/site/data/option3/images02.png" alt="Banner"></a>
                    <a class="banner banner3" href="#"><img src="{{url()}}/assets/site/data/option3/images03.png" alt="Banner"></a>
                    <a class="banner banner4" href="#"><img src="{{url()}}/assets/site/data/option3/images04.png" alt="Banner"></a>
                </div>
                <!-- ./group banner -->
                <div class="block3 tab-cat-products">
                    <div class="block-head">
                        <ul class="nav-tab tab-category">
                            <li class="active"><a data-toggle="tab" href="#tab-4">Fashion</a></li>
                            <li><a data-toggle="tab" href="#tab-5">electronics</a></li>
                            <li><a data-toggle="tab" href="#tab-6">sports</a></li>
                        </ul>
                    </div>
                    <div class="block-inner">
                        <div class="tab-container">
                            <div id="tab-4" class="tab-panel active">
                                <div class="sub-cat">
                                    <ul>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Girl</a></li>
                                        <li><a href="#">Boys</a></li>
                                    </ul>
                                </div>
                                <div class="cat-product">
                                    <ul class="products kt-owl-carousel" data-margin="22" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"768":{"items":2},"1200":{"items":3}}'>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p29.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p30.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p31.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-panel">
                                <div class="sub-cat">
                                    <ul>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Girl</a></li>
                                        <li><a href="#">Boys</a></li>
                                    </ul>
                                </div>
                                <div class="cat-product">
                                    <ul class="products kt-owl-carousel" data-margin="22" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"768":{"items":2},"1200":{"items":3}}'>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p32.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p33.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p34.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="tab-6" class="tab-panel">
                                <div class="sub-cat">
                                    <ul>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Girl</a></li>
                                        <li><a href="#">Boys</a></li>
                                    </ul>
                                </div>
                                <div class="cat-product">
                                    <ul class="products kt-owl-carousel" data-margin="22" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"768":{"items":2},"1200":{"items":3}}'>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p35.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p36.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="{{url()}}/assets/site/data/option3/p37.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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