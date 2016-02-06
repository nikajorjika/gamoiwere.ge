<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/lib/easyzoom/easyzoom.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/css/global.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="{{url()}}/assets/site/css/option3.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <title>გამოიწერეთ | Gamoiwere.ge</title>
</head>
<body class="option3">
<!-- header -->
<header id="header">
    <div class="container">
        <!-- main header -->
        <div class="row">
            <div class="main-header">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="logo">
                            <a href="{{url()}}"><img src="{{url()}}/assets/site/data/option3/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-7">
                        <div class="advanced-search box-radius">
                            <form class="form-inline">
                                <div class="form-group search-category">
                                    <select id="category-select" class="search-category-select">
                                        <option>აირჩიე კატეგორია</option>
                                        @foreach($category as $c)
                                            <option class="category-top" value="{{$c->id}}"><h3>{{$c->title_geo}}</h3></option>
                                            @if(isset($c->subcategory[0]))
                                                @foreach($c->subcategory as $s)
                                                <option  value="{{$s->id}}">{{$s->title_geo}}</option>
                                                @endforeach
                                                @endif
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group search-input">
                                    <input type="text" placeholder="What are you looking for?">
                                </div>
                                <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-4 col-lg-3">
                        <div class="wrap-block-cl">
                            <div class="inner-cl box-radius">
                                <div class="dropdown user-info">
                                    <a data-toggle="dropdown" role="button"><i class="fa fa-user"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-user"></i> My account</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i> My Widshlist</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Checkout</a></li>
                                        <li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
                                    </ul>
                                </div>
                                @if(!Auth::user()->check())
                                <div class="currency">
                                    <a href="{{route('site.login.show')}}">შესვლა</a>
                                </div>

                                <div class="language">
                                    <a href="{{route('site.registration.show')}}"> რეგისტრაცია</a>
                            </div>
                                    @else
                                    <div class="currency">
                                        <a href="{{route('site.login.show')}}">{{Auth::user()->user()->email}}</a>
                                    </div>
                                    @endif
                            </div>
                    </div>
                    <div class="col-sm-5 cart-mobile">
                        <div class="block-wrap-cart">
                            <div class="iner-block-cart box-radius">
                                <a href="cart.html">
                                    <span class="total">$459.00</span>
                                </a>
                            </div>
                            <div class="block-mini-cart">
                                <div class="mini-cart-content">
                                    <h5 class="mini-cart-head">2 Items in my cart</h5>
                                    <div class="mini-cart-list">
                                        <ul>
                                            <li class="product-info">
                                                <div class="p-left">
                                                    <a href="#" class="remove_link"></a>
                                                    <a href="#">
                                                        <img class="img-responsive" src="{{url()}}/assets/site/data/p1.jpg" alt="Product">
                                                    </a>
                                                </div>
                                                <div class="p-right">
                                                    <p class="p-name">Donec Ac Tempus</p>
                                                    <p class="product-price">$139.98</p>
                                                    <p>Qty: 1</p>
                                                </div>
                                            </li>
                                            <li class="product-info">
                                                <div class="p-left">
                                                    <a href="#" class="remove_link"></a>
                                                    <a href="#">
                                                        <img class="img-responsive" src="{{url()}}/assets/site/data/p2.jpg" alt="Product">
                                                    </a>
                                                </div>
                                                <div class="p-right">
                                                    <p class="p-name">Donec Ac Tempus</p>
                                                    <p class="product-price">$139.98</p>
                                                    <p>Qty: 1</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="toal-cart">
                                        <span>Total</span>
                                        <span class="toal-price pull-right">$279.96</span>
                                    </div>
                                    <div class="cart-buttons">
                                        <a href="checkout.html" class="button-radius btn-check-out">Checkout<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./main header -->
    </div>
    <div class="container">
        <div class="row">
            <!-- main menu-->
            <div class="main-menu">
                <div class="container">
                    <div class="row">
                        <nav class="navbar" id="main-menu">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <a class="navbar-brand" href="#">MENU</a>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="{{url()}}">მთავარი</a></li>
                                        <li><a href="{{route('site.news.show')}}">სიახლეები</a></li>
                                        <li><a href="{{route('site.contact.show')}}">კონტაქტი</a></li>
                                        <li><a href="{{route('site.about.show')}}">ჩვენს შესახებ</a></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                            <div class="block-wrap-cart">
                                                <div class="iner-block-cart">
                                                    <a href="cart.html">
                                                        <span class="total">$459.00</span>
                                                    </a>
                                                </div>
                                                <div class="block-mini-cart">
                                                    <div class="mini-cart-content">
                                                        <h5 class="mini-cart-head">2 Items in my cart</h5>
                                                        <div class="mini-cart-list">
                                                            <ul>
                                                                <li class="product-info">
                                                                    <div class="p-left">
                                                                        <a href="#" class="remove_link"></a>
                                                                        <a href="#">
                                                                            <img class="img-responsive" src="{{url()}}/assets/site/data/p1.jpg" alt="Product">
                                                                        </a>
                                                                    </div>
                                                                    <div class="p-right">
                                                                        <p class="p-name">Donec Ac Tempus</p>
                                                                        <p class="product-price">$139.98</p>
                                                                        <p>Qty: 1</p>
                                                                    </div>
                                                                </li>
                                                                <li class="product-info">
                                                                    <div class="p-left">
                                                                        <a href="#" class="remove_link"></a>
                                                                        <a href="#">
                                                                            <img class="img-responsive" src="{{url()}}/assets/site/data/p2.jpg" alt="Product">
                                                                        </a>
                                                                    </div>
                                                                    <div class="p-right">
                                                                        <p class="p-name">Donec Ac Tempus</p>
                                                                        <p class="product-price">$139.98</p>
                                                                        <p>Qty: 1</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="toal-cart">
                                                            <span>Total</span>
                                                            <span class="toal-price pull-right">$279.96</span>
                                                        </div>
                                                        <div class="cart-buttons">
                                                            <a href="checkout.html" class="button-radius btn-check-out">Checkout<span class="icon"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--/.nav-collapse -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- ./main menu-->
        </div>
    </div>
</header>
