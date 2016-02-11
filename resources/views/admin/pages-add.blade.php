@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">გვერდები</h1>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('admin.pages.show')}}"><i class="fa fa-dashboard"></i> გვერდები</a>
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
                                <a href="{{url()}}/uploads/pages/{{$obj->image}}" class="thumbnail">
                                    <img src="{{url()}}/uploads/pages/{{$obj->image}}">
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="form-group"><br/>
                    <label for="image">სურათი:</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="tab-content">
                    <div id="geo" class="tab-pane fade in active"><br/>
                        <div class="form-group">
                            <label for="title-geo">სათაური [GEO]:</label>
                            {!! Form::text('title_geo', null,
                                ['required',
                                 'class'=>'form-control',
                                 'id' => 'title-geo',
                                 'placeholder'=>'ქართული სათაური']) !!}
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
                            <label for="title-eng">სათაური [ENG]</label>
                            {!! Form::text('title_eng', null,
                                ['class'=>'form-control',
                                 'id' => 'title-eng']) !!}
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
                            <label for="title-rus">სათაური [RUS]</label>
                            {!! Form::text('title_rus', null,
                              ['class'=>'form-control',
                               'id' => 'title-rus']) !!}
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