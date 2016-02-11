@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">სლაიდერი</h1>
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('admin.slider.show')}}"><i class="fa fa-fw fa-sliders"></i>  სლაიდერი</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-pencil-square-o"></i> დამატება (165 x 75)
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-12">
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
                                        <a href="{{url()}}/uploads/sideslider/{{$obj->image}}" class="thumbnail">
                                            <img src="{{url()}}/uploads/sideslider/{{$obj->image}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group"><br/>
                            <label for="image">სურათი:</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <div class="form-group"><br/>
                            <label for="url">ბმული:</label>
                            {!! Form::text('url', null,
                                      ['class'=>'form-control',
                                       'id' => 'url']) !!}
                        </div>
                        <div class="tab-content">
                            <div id="geo" class="tab-pane fade in active"><br/>
                                <div class="form-group">
                                    <label for="link-title-geo">სათაური ბმულისთვის [GEO]:</label>
                                    {!! Form::text('link_title_geo', null,
                                        ['required',
                                         'class'=>'form-control',
                                         'id' => 'link-title-geo']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="title-geo">სათაური [GEO]:</label>
                                    {!! Form::text('title_geo', null,
                                        ['required',
                                         'class'=>'form-control',
                                         'id' => 'title-geo']) !!}
                                </div>


                            </div>
                            <div id="eng" class="tab-pane fade"><br/>
                                <div class="form-group">
                                    <label for="link-title-eng">სათაური ბმულისთვის [ENG]:</label>
                                    {!! Form::text('link_title_eng', null,
                                        [
                                         'class'=>'form-control',
                                         'id' => 'link-title-eng']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="title-eng">სათაური [ENG]:</label>
                                    {!! Form::text('title_eng', null,
                                        ['class'=>'form-control',
                                         'id' => 'title-eng']) !!}
                                </div>

                            </div>
                            <div id="rus" class="tab-pane fade"><br/>
                                <div class="form-group">
                                    <label for="link-title-rus">სათაური ბმულისთვის [RUS]:</label>
                                    {!! Form::text('link_title_rus', null,
                                        [
                                         'class'=>'form-control',
                                         'id' => 'link-title-rus']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="title-rus">სათაური [RUS]:</label>
                                    {!! Form::text('title_rus', null,
                                      ['class'=>'form-control',
                                       'id' => 'title-rus']) !!}

                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">შენახვა</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop