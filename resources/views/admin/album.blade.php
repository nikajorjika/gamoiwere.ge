@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ალბომი</h1>
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-folder-o"></i>  ალბომი
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <a href="{{route('admin.album.add')}}"><button class="btn btn-default" style="width: 100%"> <i style="float: left; font-size: 22px;" class="fa fa-plus"></i> დამატება</button></a>
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
                        @foreach($album as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td><img src="{{url()}}/uploads/albums/{{$a->thumbnail}}" style="height:35px;"/></td>
                                <td>{{$a->title_geo}}</td>
                                <td>
                                    <a href="{{route('admin.photos.show', $a->id)}}">
                                        <button class="btn btn-primary" style="width: 32%">სურათების დამატება</button>
                                    </a>
                                    <a href="{{route('admin.album.edit', $a->id)}}">
                                        <button class="btn btn-warning" style="width: 32%">შესწორება</button>
                                    </a>
                                    <a id="delete" href="{{route('admin.album.delete', $a->id)}}">
                                        <button class="btn btn-danger" style="width: 32%">წაშლა</button>
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
