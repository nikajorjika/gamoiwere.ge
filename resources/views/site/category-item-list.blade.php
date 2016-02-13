@include('site.components.header')
<div class="container">
    <div class="row">
        <div class="block block-breadcrumbs">
            <ul>
                <li class="home">
                    <a href="{{url()}}"><i class="fa fa-home"></i></a>
                    <span></span>
                </li>
                <li><a href="{{url()}}/category/{{$categoryex->id}}">{{$categoryex->title_geo}}</a><span></span></li>
                @if(isset($subcategory))
                <li><a href="{{url()}}/category/{{$subcategory->id}}">{{$subcategory->title_geo}}</a><span></span></li>
                    @endif
            </ul>
        </div>
        <div class="block block-filter-top">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="filter-label first">ქვე კატეგორია</div>
                </div>
                <div class="col-sm-9 col-md-10 first">
                    <div class="filter-value">
                        <ul class="list-category">
                            @if(isset($categoryex->subcategory[0]))
                                @foreach($categoryex->subcategory as $sb)
                            <li><a href="{{url()}}/subcategory/{{$sb->id}}">{{$sb->title_geo}}</a></li>
                                @endforeach
                                @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="filter-label">Price</div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="filter-value">
                        <div class="block-filter-inner box-filter-price">
                            <div data-label-reasult="Filter By Price: " data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                            <div class="amount-range-price">Filter By Price: $50 - $350</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="filter-label">Color</div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="filter-value">
                        <ul class="list-color">
                            <li><a href="#"><span style=" background:#4d6dbd;">blule</span></a></li>
                            <li><a href="#"><span style=" background:#2fbcda;">blule</span></a></li>
                            <li class="selected"><a href="#"><span style=" background:#ffe00c;">blule</span></a></li>
                            <li><a href="#"><span style=" background:#72b226;">blule</span></a></li>
                            <li><a href="#"><span style=" background:#fb5d5d;">blule</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="filter-label">Color</div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="filter-value">
                        <ul class="list-size">
                            <li><a href="#"><span>X</span></a></li>
                            <li><a href="#"><span>XL</span></a></li>
                            <li class="selected"><a href="#"><span>S</span></a></li>
                            <li><a href="#"><span>XS</span></a></li>
                            <li><a href="#"><span>M</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="filter-label last">Bands</div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="filter-value">
                        <ul class="list-category last">
                            <li><a href="#">Band 01</a></li>
                            <li><a href="#">Band 02</a></li>
                            <li><a href="#">Band 03</a></li>
                            <li><a href="#">Band 04</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="page-title">
            <span>{{$categoryex->title_geo}}</span>
        </h3>
        <div class="category-products">
            <ul class="products list row">
                @foreach($item as $i)
                <li class="product col-xs-12 col-sm-6">
                    <div class="product-container">
                        <div class="inner row">
                            <div class="product-left col-sm-6">
                                <div class="product-thumb">
                                    <a class="product-img" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}"><img src="{{url()}}/uploads/item/{{$i->main_image}}" alt="{{$i->title_geo}}"></a>
                                    <a title="Quick View" href="{{url()}}/item/{{$i->slug}}/{{$i->id}}" class="btn-quick-view">ნახვა</a>
                                </div>
                            </div>
                            <div class="product-right col-sm-6">
                                <div class="product-name">
                                    <a href="{{url()}}/item/{{$i->slug}}/{{$i->id}}">{{$i->title_geo}}</a>
                                </div>
                                <div style="margin-top: 10px;font-size: 28px;" class="price-box">
                                    <span class="product-price"> {{$i->price}} <span class="lari">b</span></span>
                                </div>
                                <div class="desc">{!!str_limit($i->content_geo,70)!!}</div>
                                <div class="product-button">
                                    <a class="btn-add-wishlist" title="Add to Wishlist" href="#">დაამატე კალათაში</a>
                                    <a class="button-radius btn-add-cart" title="ყიდვა" href="#">ყიდვა<span class="icon"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="sortPagiBar">
            <div class="sortPagiBar-inner">
                <nav>
                    <ul class="pagination">
                            {!! $item->render()!!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@include('site.components.footer')