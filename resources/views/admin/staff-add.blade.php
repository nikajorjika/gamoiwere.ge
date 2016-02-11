@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">თანამშრომლები</h1>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('admin.staff.show')}}"><i class="fa fa-fw fa-users"></i> თანამშრომლები</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-pencil-square-o"></i> დამატება
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#geo">GEO</a></li>
                    <li><a data-toggle="tab" href="#eng">ENG</a></li>
                    <li><a data-toggle="tab" href="#rus">RUS</a></li>
                </ul>
                @if(!empty($obj))
                    {!! Form::model($obj,['method' => 'post', 'files' => true]) !!}
                @else
                    {!! Form::open(['method' => 'post', 'files' => true]) !!}
                @endif
                {{csrf_field()}}

                @if(!empty($obj))
                    <div class="form-group"><br/>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="{{url()}}/uploads/staff/{{$obj->image}}" class="thumbnail">
                                    <img src="{{url()}}/uploads/staff/{{$obj->image}}">
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="form-group"><br/>
                    <label for="image">სურათი:</label>
                    <input type="file" name="image" class="form-control" id="image">
                    <br/>
                    <label for="email">ელ-ფოსტა:</label>
                    {!! Form::text('email', null,
                               ['required',
                                'class'=>'form-control',
                                'id' => 'email']) !!}
                    <br/>
                    <label for="phone">ტელეფონი:</label>
                    {!! Form::text('phone', null,
                               ['required',
                                'class'=>'form-control',
                                'id' => 'phone']) !!}
                    <br/>
                    <label for="facebook">facebook-ის ბმული:</label>
                    {!! Form::text('fb', null,
                               ['required',
                                'class'=>'form-control',
                                'id' => 'facebook']) !!}
                    <br/>
                    <label for="twitter">Twitter-ის ბმული:</label>
                    {!! Form::text('tw', null,
                              ['required',
                               'class'=>'form-control',
                               'id' => 'twitter']) !!}
                    <br/>
                    <label for="linkedin">Linkedin-ის ბმული:</label>
                    {!! Form::text('li', null,
                              ['required',
                               'class'=>'form-control',
                               'id' => 'linkedin']) !!}
                </div>
                <div class="tab-content">
                    <div id="geo" class="tab-pane fade in active"><br/>
                        <div class="form-group">
                            <label for="title-geo">სახელი და გვარი [GEO]:</label>
                            {!! Form::text('full_name_geo', null,
                                ['required',
                                 'class'=>'form-control',
                                 'id' => 'title-geo',
                                 'placeholder'=>'სახელი და გვარი']) !!}
                        </div><br/>
                        <div class="form-group">
                            <label for="position-geo">პოზიცია [GEO]:</label>
                            {!! Form::text('position_geo', null,
                                ['required',
                                 'class'=>'form-control',
                                 'id' => 'position-geo',
                                 'placeholder'=>'პოზიცია']) !!}
                        </div>
                        <div class="form-group">
                            <label for="content-geo">აღწერა [GEO]:</label>
                            {!! Form::textarea('content_geo', null,
                              ['required',
                               'class'=>'form-control',
                               'id' => 'content-geo']) !!}
                        </div>
                    </div>
                    <div id="eng" class="tab-pane fade"><br/>
                        <div class="form-group">
                            <label for="full_name_eng">სახელი და გვარი [ENG]</label>
                            {!! Form::text('full_name_eng', null,
                                ['class'=>'form-control',
                                 'id' => 'full_name_eng']) !!}
                        </div>
                        <div class="form-group">
                            <label for="position-eng">პოზიცია [ENG]:</label>
                            {!! Form::text('position_eng', null,
                                [
                                 'class'=>'form-control',
                                 'id' => 'position-eng'
                                 ]) !!}
                        </div>
                        <div class="form-group">
                            <label for="content-eng">აღწერა [ENG]:</label>
                            {!! Form::textarea('content_eng', null,
                              ['class'=>'form-control',
                               'id' => 'content-eng']) !!}
                        </div>
                    </div>
                    <div id="rus" class="tab-pane fade"><br/>
                        <div class="form-group">
                            <label for="full_name_rus">სახელი და გვარი [RUS]</label>
                            {!! Form::text('full_name_rus', null,
                              ['class'=>'form-control',
                               'id' => 'full_name_rus']) !!}
                        </div>
                        <div class="form-group">
                            <label for="position-rus">პოზიცია [RUS]:</label>
                            {!! Form::text('position_rus', null,
                                [
                                 'class'=>'form-control',
                                 'id' => 'position-rus'
                                 ]) !!}
                        </div>
                        <div class="form-group">
                            <label for="content-rus">აღწერა [RUS]:</label>
                            {!! Form::textarea('content_rus', null,
                            ['class'=>'form-control',
                             'id' => 'content-rus']) !!}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">შენახვა</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('content-geo');
        CKEDITOR.replace('content-eng');
        CKEDITOR.replace('content-rus');
    </script>
@stop