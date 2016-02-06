@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">თანამშრომლები</h1>
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-users"></i> თანამშრომლები
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <a href="{{route('admin.staff.add')}}"> <button class="btn btn-default" style="width: 100%"><i style="float: left; font-size: 22px;" class="fa fa-plus"></i> დამატება</button></a>
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
                            <th>სახელი</th>
                            <th>ელ-ფოსტა</th>
                            <th>ტელეფონი</th>
                            <th>მოქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($staff as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td><img src="{{url()}}/uploads/staff/{{$s->image}}" style="height:35px;"/></td>
                                <td>{{$s->full_name_geo}}</td>
                                <td>{!! $s->email !!}</td>
                                <td>{!! $s->phone !!}</td>
                                <td>
                                    <a href="{{route('admin.staff.edit', $s->id)}}">
                                        <button class="btn btn-warning" style="width: 49%">შესწორება</button>
                                    </a>
                                    <a id="delete" href="{{route('admin.staff.delete', $s->id)}}">
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