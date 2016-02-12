@include('site.components.header')
<div class="container">
    <div class="row">
        <div class="block block-breadcrumbs">
            <ul>
                <li class="home">
                    <a href="{{url()}}"><i class="fa fa-home"></i></a>
                    <span></span>
                </li>
                <li>ცხელი შემოთავაზება</li>
            </ul>
        </div>
        </div>
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
                        {{$item->render()}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@include('site.components.footer')