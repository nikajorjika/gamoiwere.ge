@include('site.components.header')
<div class="container">
        <div class="main-page">
            <h1 class="page-title">შეძენა</h1>
            <div class="page-content checkout-page">
                <h3 class="checkout-sep priv-info"> მომხმარებლის ინფორმაცია</h3>
                <div class="box-border">
                    <table class="card-table">
                        <th>სახელი</th>
                        <th>გვარი</th>
                        <th>ელ-ფოსტა</th>
                        <th>პირადი ნომერი</th>
                        <th>ტელეფონი</th>
                        <th>მისამართი 1</th>
                        <th>მისამართი 2</th>
                        <tbody>
                        <tr>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <td>12312312331</td>
                            <td>{{$user->mobile}}</td>
                            <td>{{$user->address1}}</td>
                            <td>{{$user->address2}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <h3 class="checkout-sep shipping-info"> მიტანის სერვისი</h3>
                <div class="box-border">
                    <ul class="shipping_method">
                        <li>
                            <p class="subcaption bold">Free Shipping</p>
                            <label for="radio_button_3"><input type="radio" checked="checked" name="radio_3" id="radio_button_3">Free $0</label>
                        </li>

                        <li>
                            <p class="subcaption bold">Free Shipping</p>
                            <label for="radio_button_4"><input type="radio" name="radio_3" id="radio_button_4"> Standard Shipping $5.00</label>
                        </li>
                    </ul>
                </div>
                <h3 class="checkout-sep bank-info"> მომიშნეთ ბარათი</h3>
                <div class="box-border">
                    <ul>
                        <li>
                            <label for="radio_button_5"><input type="radio" checked="checked" name="radio_4" id="radio_button_5"> Mr.Gamoiwere.ge</label>
                        </li>

                        <li>

                            <label for="radio_button_6"><input type="radio" name="radio_4" id="radio_button_6"> Credit card (saved)</label>
                        </li>

                    </ul>
                </div>
                <h3 class="checkout-sep prod-info">პროდუქტის ინფორმაცია</h3>
                <div class="box-border">
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                        <tr>
                            <th class="cart_product">პროდუქტი</th>
                            <th>აღწერა</th>
                            <th>ერთ. ღირებულება</th>
                            <th>რაოდენობა</th>
                            <th>ჯამი</th>
                            <th class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="data/p1.jpg" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">Frederique Constant </a></p>
                                <small class="cart_ref">SKU : #123654999</small><br>
                                <small><a href="#">Color : Beige</a></small><br>
                                <small><a href="#">Size : S</a></small>
                            </td>
                            <td class="price"><span>61,19 €</span></td>
                            <td class="qty">
                                <input class="form-control input-sm" type="text" value="1">
                                <a href="#"><i class="fa fa-caret-up"></i></a>
                                <a href="#"><i class="fa fa-caret-down"></i></a>
                            </td>
                            <td class="price">
                                <span>61,19 €</span>
                            </td>
                            <td class="action">
                                <a href="#">Delete item</a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">ჯამი გადასახადებით</td>
                            <td colspan="2">122.38 €</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>ჯამი</strong></td>
                            <td colspan="2"><strong>122.38 €</strong></td>
                        </tr>
                        </tfoot>
                    </table>
                    <button class="button pull-right checkout-btn">შეძენა</button>
                </div>
            </div>
        </div>
    </div>

</div>w
@include('site.components.footer')