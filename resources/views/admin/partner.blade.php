@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">პარტნიორები</h1>
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-globe"></i> პარტნიორები
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <a href="{{route('admin.partner.add')}}" <button class="btn btn-default" style="width: 100%"><i style="float: left; font-size: 22px;" class="fa fa-plus"></i> დამატება</button></a>
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
                        @foreach($partner as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td><img src="{{url()}}/uploads/partner/{{$p->image}}" style="height:35px;"/></td>
                                <td>{{$p->title_geo}}</td>
                                <td>
                                    <a href="{{route('admin.partner.edit', $p->id)}}">
                                        <button class="btn btn-warning" style="width: 49%">შესწორება</button>
                                    </a>
                                    <a id="delete" href="{{route('admin.partner.delete', $p->id)}}">
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