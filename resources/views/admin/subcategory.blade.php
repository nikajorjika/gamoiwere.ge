@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ქვე კატეგორია</h1>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-folder-o"></i>  ქვეკატეგორია
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
                    {!! Form::open(['method' => 'post', 'files' => true]) !!}
                {{csrf_field()}}
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
                    </div>
                    <div id="eng" class="tab-pane fade"><br/>
                        <div class="form-group">
                            <label for="title-eng">სათაური [ENG]</label>
                            {!! Form::text('title_eng', null,
                                ['class'=>'form-control',
                                 'id' => 'title-eng']) !!}
                        </div>
                    </div>
                    <div id="rus" class="tab-pane fade"><br/>
                        <div class="form-group">
                            <label for="title-rus">სათაური [RUS]</label>
                            {!! Form::text('title_rus', null,
                              ['class'=>'form-control',
                               'id' => 'title-rus']) !!}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">შენახვა</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>ფოტოები</h2>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>სათაური</th>
                            <th>მოქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subcategory as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->title_geo}}</td>
                                <td>
                                    <a id="delete" href="{{route('admin.subcategory.delete',[Request::segment(3),$a->id])}}">
                                        <button class="btn btn-danger" style="width: 100%">წაშლა</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
