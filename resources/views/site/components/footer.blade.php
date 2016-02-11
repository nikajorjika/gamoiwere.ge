
<!-- footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="block footer-block-box">
                            <div class="block-head">
                                <div class="block-title">
                                    <div class="block-icon">
                                        <img src="{{url()}}/assets/site/data/email-icon.png" alt="store icon">
                                    </div>
                                    <div class="block-title-text text-sm">გამოიწერე სიახლეები</div>
                                    <div class="block-title-text text-lg">Gamoiwere.ge</div>
                                </div>
                            </div>
                            <div class="block-inner">
                                <div class="block-info clearfix">
                                   მიიღეთ ელ-ფოსტაზე ჩვენს მიერ გამოქვეყნებული სიახლეები
                                </div>
                                <div class="block-input-box box-radius clearfix">
                                    <input type="text" class="input-box-text" placeholder=" ელ-ფოტა">
                                    <button class="block-button"> გამოწერა</button>
                                </div>
                                <div class="block-info clearfix">
                                </div>
                                <div class="block-input-box box-radius clearfix">
                                    <input type="text" class="input-box-text" placeholder=" ტელეფონი">
                                    <button class="block-button"> გამოწერა</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="block footer-block-box">
                            <div class="block-head">
                                <div class="block-title">
                                    <div class="block-icon">
                                        <img src="{{url()}}/assets/site/data/partners-icon.png" alt="store icon">
                                    </div>
                                    <div class="block-title-text text-sm">ჩვენი</div>
                                    <div class="block-title-text text-lg">პარტნიორები</div>
                                </div>
                            </div>
                            <div class="block-inner">
                                <div class="block-owl">
                                    <ul class="kt-owl-carousel list-partners" data-nav="true" data-autoplay="true" data-loop="true" data-items="1">
                                        @foreach($partner as $p)
                                        <li class="partner"><a href="{{$p->url}}"><img src="{{url()}}/uploads/partner/{{$p->image}}" alt="partner"></a></li>
                                       @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="#">Buyer Central</a></li>
                                <li><a href="#">Sign in</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Buyer Protection</a></li>
                                <li><a href="#">Payment Options</a></li>
                                <li><a href="#">EMI Payment</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="#">Merchant Central</a></li>
                                <li><a href="#">Merchant Sign In</a></li>
                                <li><a href="#">Merchant Registration</a></li>
                                <li><a href="#">How Does It Work</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Fulfillment by ShopClues</a></li>
                                <li><a href="#">Merchant Tools</a></li>
                                <li><a href="#">Best Practice</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="#">Information</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Band of Trust</a></li>
                                <li><a href="#">ShopClues History</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">In the Press</a></li>
                                <li><a href="#">Awards New</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul>
                                <li class="head"><a href="#">Contact Us</a></li>
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Merchant Support</a></li>
                                <li><a href="#">Merchant Inquiries</a></li>
                                <li><a href="#">Product Reviews</a></li>
                                <li><a href="#">Brand Inquiries</a></li>
                                <li><a href="#">Bulk Orders</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="#">help</a></li>
                                <li><a href="#">See all Help</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                            <ul>
                                <li class="head"><a href="#">OTHER SERVICES</a></li>
                                <li><a href="#">Market America Gear</a></li>
                                <li><a href="#">Apply for Market</a></li>
                                <li><a href="#">America Credit Card</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link flag">
                                <li class="head"><a href="#">INTERNATIONAL SHOPPING</a></li>
                                <li><a href="#"><img src="{{url()}}/assets/site/data/flag1.png" alt="flang">Customer Support</a></li>
                                <li><a href="#"><img src="{{url()}}/assets/site/data/flag2.png" alt="flang">Canada</a></li>
                                <li><a href="#"><img src="{{url()}}/assets/site/data/flag3.png" alt="flang">Mexico</a></li>
                                <li><a href="#"><img src="{{url()}}/assets/site/data/flag4.png" alt="flang">United Kingdom</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-social">
        <div class="container">
            <div class="row">
                <div class="block-social">
                    <ul class="list-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-pied-piper"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
                <div class="block-payment">
                    <ul class="list-logo">
                        <li><a href="#"><img src="{{url()}}/assets/site/data/payment1.png" alt="Payment Logo"></a></li>
                        <li><a href="#"><img src="{{url()}}/assets/site/data/payment2.png" alt="Payment Logo"></a></li>
                        <li><a href="#"><img src="{{url()}}/assets/site/data/payment3.png" alt="Payment Logo"></a></li>
                        <li><a href="#"><img src="{{url()}}/assets/site/data/payment4.png" alt="Payment Logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="block-coppyright">
                    © 2016 All Rights Reserved. <a href="">256 bit</a>
                </div>
                <div class="block-shop-phone">
                    Shop by phone <strong>1-899-353-2268</strong>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./footer -->
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<script type="text/javascript" src="{{url()}}/assets/site/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{url()}}/assets/site/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url()}}/assets/site/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="{{url()}}/assets/site/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{url()}}/assets/site/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{url()}}/assets/site/lib/easyzoom/easyzoom.js"></script>
<!-- COUNTDOWN -->
<script type="text/javascript" src="{{url()}}/assets/site/lib/countdown/jquery.plugin.js"></script>
<script type="text/javascript" src="{{url()}}/assets/site/lib/countdown/jquery.countdown.js"></script>
<!-- ./COUNTDOWN -->
<script type="text/javascript" src="{{url()}}/assets/site/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="{{url()}}/assets/site/js/script.js"></script>
</body>
</html>