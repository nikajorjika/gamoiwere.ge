@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">სიახლეები</h1>
        <div class="col-md-10">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> სიახლეები
                </li>
            </ol>
        </div>
        <div class="col-md-2">
            <a href="{{route('admin.news.add')}}"><button class="btn btn-default" style="width: 100%"><i style="float: left; font-size: 22px;" class="fa fa-plus"></i> დამატება</button></a>
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
                                <th>მცირე აღწერა</th>
                                <th>მოქმედება</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $n)
                                <tr>
                                    <td>{{$n->id}}</td>
                                    <td><img src="{{url()}}/uploads/news/{{$n->image}}" style="height:35px;"/></td>
                                    <td>{{str_limit($n->title_geo, 20)}}</td>
                                    <td>{!! str_limit($n->content_small_geo, 60) !!}</td>
                                    <td>
                                        <a href="{{route('admin.comment.show', $n->id)}}">
                                            <button class="btn btn-primary" style="width: 32%">კომენტარები</button>
                                        </a>
                                        <a href="{{route('admin.news.edit', $n->id)}}">
                                           <button class="btn btn-warning" style="width: 32%">შესწორება</button>
                                        </a>
                                        <a id="delete" href="{{route('admin.news.delete', $n->id)}}">
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