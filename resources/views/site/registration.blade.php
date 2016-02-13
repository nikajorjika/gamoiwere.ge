@include('site.components.header')
        <!-- ./header -->
<div class="container">
    <div class="row">
        <div class="main-page">
            <div class="page-content">
                <div class="row">
                    <div class="col-sm-3">
                        </div>
                    <div class="col-sm-6">
                        <div class="box-border">
                            <h3>რეგისტრაცია</h3><br>
                            {!! Form::open(['method' => 'post']) !!}
                            {{csrf_field()}}
                            <p>
                                <label for="firstname">სახელი</label>
                                {!! Form::text('firstname', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'firstname']) !!}
                            </p>
                            <p>
                                <label for="lastname">გვარი</label>
                                {!! Form::text('lastname', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'lastanme']) !!}
                            </p>
                            <p>
                                <label for="priv">პირადობის ნომერი</label>
                                {!! Form::text('priv', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'priv']) !!}
                            </p>
                            <p>
                                <label for="email">ელ-ფოსტა</label>
                                {!! Form::text('email', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'email']) !!}
                            </p>
                            <p>
                                <label for="password">პაროლი</label>
                                {!! Form::password('password', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'password']) !!}
                            </p>
                            <p>
                                <label for="passwordcrf">გაიმეორეთ პაროლი</label>
                                {!! Form::password('passwordcrf', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'passwordcrf']) !!}
                            </p>
                            <p>
                                <label for="mobile"> ტელეფონი</label>
                                {!! Form::text('mobile', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'mobile']) !!}
                            </p>
                            <p>
                                <label for="address1"> მისამართი 1</label>
                                {!! Form::text('address1', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'address1']) !!}
                            </p>
                            <p>
                                <label for="address1"> მისამართი 2</label>
                                {!! Form::text('address2', null,
                                    ['required',
                                     'class'=>'form-control',
                                     'id' => 'address2']) !!}
                            </p>
                            <p>
                                <input style="font-size: 16px; " required name="terms" type="checkbox"> წავიკითხე და ვეთანხმები წესებს <a style="font-weight: 900;" href="{{route('site.terms.show')}}">წესები & პირობები</a>
                            </p>
                            <p>
                                <button type="submit" class="button"><i class="fa fa-user"></i> შექმენით ანგარიში</button>
                            </p>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('site.components.footer')