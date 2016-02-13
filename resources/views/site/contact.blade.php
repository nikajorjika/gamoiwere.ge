@include('site.components.header')
<div class="container">
    <div class="row">
        <div class="main-page">
            <h1 class="page-title priv-info">კონტაქტი</h1>
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="box-border">
                            <h3>მოგვწერეთ ელ-ფოსტაზე</h3><br>
                            {!! Form::open(['method' => 'post']) !!}
                            {{csrf_field()}}
                            <p>
                                <label>სახელი</label>
                                <input name="name" required type="text">
                            </p>
                            <p>
                                <label>ელ-ფოსტა</label>
                                <input name="email" required type="text">
                            </p>
                            <p>
                                <label>საგანი</label>
                                <input name="subject" required type="text">
                            </p>
                            <p>
                                <label>შეტყობინება</label>
                                <textarea  name="message" style="min-height: 150px;" required type="text"></textarea>
                                </p>
                                <button type="submit" style="float:right; background-color: #FD7400" class="button"><i class="fa fa-send-o"></i> გაგზავნა</button>
                            </p>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('site.components.footer')