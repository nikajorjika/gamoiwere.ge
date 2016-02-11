@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ფოტოები</h1>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-folder-o"></i>  ფოტოები
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="padding-left: 30px; padding-right: 30px;">
            {!! Form::open(['method' => 'post', 'files' => true]) !!}
            {{csrf_field()}}

            <div class="form-group"><br/>
                <label for="thumbnail">სურათი (აირჩიეთ ერთი ან რამდენიმე):</label>
                <input type="file" name="images[]" class="form-control" id="thumbnail" multiple="true">
            </div>

            <button type="submit" class="btn btn-default">ატვირთვა</button>
            {!! Form::close() !!}
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
                            <th>სურათი</th>
                            <th>მოქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($photos as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td><img src="{{url()}}/uploads/photos/{{$a->photo}}" style="height:100px;"/></td>
                                <td>
                                    <a id="delete" href="{{route('admin.photos.delete',[Request::segment(3),$a->id])}}">
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
