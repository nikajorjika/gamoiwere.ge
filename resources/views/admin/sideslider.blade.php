@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">სლაიდერი</h1>
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-sliders"></i> სლაიდერი
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <a href="{{route('admin.sideslider.add')}}"> <button class="btn btn-default" style="width: 100%"> <i style="float: left; font-size: 22px;" class="fa fa-plus"></i> დამატება</button></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>სურათი</th>
                            <th>სათაური</th>
                            <th>მოქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sideslider as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td><img src="{{url()}}/uploads/sideslider/{{$s->image}}" style="height:35px;"/></td>
                                <td>{{$s->title_geo}}</td>
                                <td>
                                    <a href="{{route('admin.sideslider.edit', $s->id)}}">
                                        <button class="btn btn-warning" style="width: 49%">შესწორება</button>
                                    </a>
                                    <a id="delete" href="{{route('admin.sideslider.delete', $s->id)}}">
                                        <button class="btn btn-danger" style="width: 49%">წაშლა</button>
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
