@include('site.components.header')
        <!-- ./header -->
<div class="container">
    <div class="row">
        <div class="main-page">
            <h1 class="page-title">იდენთიფიკაცია</h1>
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="box-border">
                            <h3>სისტემაში შესვლა</h3><br>
                            {!! Form::open(['method' => 'post']) !!}
                            {{csrf_field()}}
                            <p>
                                <label>ელ-ფოსტა</label>
                                <input name="email" required type="text">
                            </p>
                            <p>
                                <label>პაროლი</label>
                                <input  name="password" required type="password">
                            </p>
                            <p>
                                <a href="#">დაგავიწყდათ პაროლი?</a>
                            </p>
                            <p>
                                <button type="submit" class="button"><i class="fa fa-lock"></i> შესვლა</button>
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