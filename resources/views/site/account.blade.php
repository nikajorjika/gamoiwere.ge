@include('site.components.header')
<div class="container">
<!--Default Section-->
<section class="default-section">
    <div class="auto-container">

        <div class="row clearfix">

            <!--Column-->
            <div class="col-md-12 col-sm-12 col-xs-12 column">
                <h3 class="priv-info">პირადი ინფორმაცია</h3>
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
                        <td>{{$user->priv}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->address1}}</td>
                        <td>{{$user->address2}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 column">
                <h3 class="bank-info">საბანკო ინფორმაცია</h3>
                 <table class="card-table">
                     <th>#</th>
                     <th>სახელი</th>
                     <th>ბარათის ნომერი</th>
                     <th style="max-width: 30px;">ვადა</th>
                     <th style="max-width: 30px;text-align: center;">მოქმედება</th>
                     <tbody>
                     <tr>
                     <td>1</td>
                     <td>asdasdadasd</td>
                     <td>121497042914721049127</td>
                     <td>09/17</td>
                     <td style="padding: 0px;"><button class="delete-card-btn">წაშლა</button></td>
                     </tr>
                     </tbody>
                 </table>
                </div>
            <div class="col-md-12 col-sm-12 col-xs-12 column">
                {!! Form::open(['method' => 'post']) !!}
                <h3 class="add-info">ბარათის დამატება</h3>
                <input type="hidden" name="user_id" value="{{Auth::user()->user()->id}}">
                <table class="card-table">
                    <th>სახელი</th>
                    <th>ბარათის ნომერი</th>
                    <th style="max-width: 30px;">ვადა</th>
                    <th style="max-width: 30px;text-align: center;">მოქმედება</th>
                    <tbody>
                    <tr>
                        <td>
                            {!! Form::text('name', null,
                                    ['required',
                                     'class'=>'form-control add-card-inp',
                                     'placeholder' => 'Mr. Gamoiwere.ge']) !!}
                        </td>
                        <td>
                            {!! Form::text('card_code', null,
                                    ['required',
                                     'class'=>'form-control add-card-inp',
                                     'placeholder' => '4315704023659800']) !!}
                        </td>
                        <td>
                            {!! Form::text('expire_date', null,
                                    ['required',
                                     'class'=>'form-control add-card-inp',
                                        'placeholder' => '05/19'])!!}
                        </td>
                        <td style="padding: 0px;"><button class="add-card-btn">დამატება</button></td>
                    </tr>
                    </tbody>
                </table>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
</div>
@include('site.components.footer')