@include('site.components.header')
        <!-- ./header -->
<div class="container product-page">
    <div class="row">
        <div class="block block-breadcrumbs">
            <ul>
                <li class="home">
                    <a href="{{url()}}"><i class="fa fa-home"></i></a>
                    <span></span>
                </li>
                <li><a href="{{url()}}/category/{{$categorytop->id}}">{{$categorytop->title_geo}}</a><span></span></li>
                <li><a href="{{url()}}/subcategory/{{$subcategorytop->id}}">{{$subcategorytop->title_geo}}</a><span></span></li>
                <li>{{$item->title_geo}}</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="col-sm-5">
                <div class="block block-product-image">
                    <div class="product-image easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                        <a href="{{url()}}/uploads/item/{{$item->big_image}}">
                            <img src="{{url()}}/uploads/item/{{$item->main_image}}" alt="Product" width="450" height="450" />
                        </a>
                    </div>
                    <div class="product-list-thumb">
                        <ul class="thumbnails kt-owl-carousel" data-margin="10" data-nav="true" data-responsive='{"0":{"items":2},"600":{"items":2},"1000":{"items":3}}'>
                           @foreach($itemphotos as $ip)
                            <li>
                                <a href="{{url()}}/uploads/photos/{{$item_id}}/{{$ip}}" data-standard="{{url()}}/uploads/photos/{{$item_id}}/{{$ip}}">
                                    <img src="{{url()}}/uploads/photos/{{$item_id}}/{{$ip}}" alt="{{$item->title_geo}}" />
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="block-product-info">
                            <h2 class="product-name">{{$item->title_geo}}</h2>
                            <div style="font-size: 28px;" class="price-box">
                                <span class="product-price">{{$item->price}} <span class="lari">b</span></span>
                            </div>
                            <div class="desc">{!! $item->content_geo !!}</div>
                            <div class="variations-box">
                                <table class="variations-table">
                                    <tr>
                                        <td class="table-label"> ფერი</td>
                                        <td class="table-value">
                                            <ul class="list-check-box color">
                                                @foreach($colors as $color)
                                                    <li><a class="" href="#"><span style="background:{{$color->color}};">Blue</span></a></li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label"> ზომა</td>
                                        <td class="table-value">
                                            <ul class="list-check-box">
                                                @foreach($sizes as $size)
                                                    <li><a href="#">{{$size->size}}</a></li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-label">რაოდენობა</td>
                                        <td class="table-value">
                                            <div class="box-qty">
                                                <a href="#" class="quantity-minus">-</a>
                                                <input type="text" class="quantity" value="1">
                                                <a href="#" class="quantity-plus">+</a>
                                            </div>
                                            <a href="#" class="button-radius btn-add-cart">ყიდვა<span class="icon"></span></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="box-control-button">
                                fb like and share
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <!-- block  top sellers -->
                        <div class="block block-top-sellers">
                            <div class="block-head">
                                <div class="block-title">
                                    <div class="block-icon">
                                        <img src="{{url()}}/assets/site/images/top-seller-icon.png" alt="store icon">
                                    </div>
                                    <div class="block-title-text text-sm">top</div>
                                    <div class="block-title-text text-lg">SELLERS</div>
                                </div>
                            </div>
                            <div class="block-inner">
                                <ul class="products kt-owl-carousel" data-margin="10" data-items="1" data-autoplay="true" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":1}}'>
                                   @foreach($topseller as $ts)
                                    <li class="product">
                                        <div class="product-container">
                                            <div class="product-left">
                                                <div class="product-thumb">
                                                    <a class="product-img" href="{{url()}}/item/{{$ts->slug}}/{{$ts->id}}"><img src="{{url()}}/uploads/item/{{$ts->main_image}}" alt="{{$ts->title_geo}}"></a>
                                                    <a title="Quick View" href="{{url()}}/item/{{$ts->slug}}/{{$ts->id}}" class="btn-quick-view">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product-right">
                                                <div class="product-name">
                                                    <a href="{{url()}}/item/{{$ts->slug}}/{{$ts->id}}">{{$ts->title_geo}}</a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="product-price"> {{$ts->price}} <span class="lari">b</span> </span>
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
                        </div>
                        <!-- block  top sellers -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Product tab -->
        <div class="block block-tabs tab-left">
            <div class="block-head">
                <ul class="nav-tab">
                    <li class="active"><a data-toggle="tab" href="#review">მიმოხილვა</a></li>
                </ul>
            </div>
            <div class="block-inner">
                <div class="tab-container">
                    <div id="review" class="tab-panel active">
                        <div id="reviews">
                            <ol class="comment-list">
                                @foreach($review as $r)
                                <li class="comment">
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <a href="#" class="comment-author">{{$r->fullname}}</a>
                                        </div>
                                        <div class="comment-entry">
                                            <p>{{$r->comment}}</p>
                                        </div>
                                    </div>
                                </li>
                                    @endforeach
                            </ol>
                            <div class="comment-form">
                                {!! Form::open(['method' => 'post'],$item->id) !!}
                                <h3 class="comment-reply-title">დატოვეთ თქვენი შეხედულება</h3><br>
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
                                    <input type="hidden" value="{{$item->id}}" name="news_id">
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
        <!-- Product tab -->
        <!-- Related Products -->
        <div class="block block-products-owl">
            <div class="block-head">
                <div class="block-title">
                    <div class="block-title-text text-lg"> დაკავშირებული პროდუქტი</div>
                </div>
            </div>
            <div class="block-inner">
                <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                  @foreach($related as $r)
                    <li class="product">
                        <div class="product-container">
                            <div class="product-left">
                                <div class="product-thumb">
                                    <a class="product-img" href="{{url()}}/item/{{$r->slug}}/{{$r->id}}"><img src="{{url()}}/uploads/item/{{$r->main_image}}" alt="{{$r->title_geo}}"></a>
                                    <a title="Quick View" href="{{url()}}/item/{{$r->slug}}/{{$r->id}}" class="btn-quick-view">Quick View</a>
                                </div>
                            </div>
                            <div class="product-right">
                                <div class="product-name">
                                    <a href="{{url()}}/item/{{$r->slug}}/{{$r->id}}">{{$r->title_geo}}</a>
                                </div>
                                <div class="price-box">
                                    <span class="product-price"> {{$r->price}} <span class="lari">b</span></span>
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
        </div>
        <!-- ./Related Products -->
    </div>
</div>
@include('site.components.footer')