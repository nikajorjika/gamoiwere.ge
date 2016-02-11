@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">კატეგორია</h1>
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-book"></i> კატეგორია
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <a href="{{route('admin.category.add')}}"> <button class="btn btn-default" style="width: 100%"><i style="float: left; font-size: 22px;" class="fa fa-plus"></i> დამატება</button></a>
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
                        @foreach($category as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td><img src="{{url()}}/uploads/category/{{$c->image}}" style="height:35px;"/></td>
                                <td>{{$c->title_geo}}</td>
                                <td>
                                    <a href="{{route('admin.subcategory.show', $c->id)}}">
                                        <button class="btn btn-primary" style="width: 32%">ქვე-კატეგორიის დამატება</button>
                                    </a>
                                    <a href="{{route('admin.category.edit', $c->id)}}">
                                        <button class="btn btn-warning" style="width: 32%">შესწორება</button>
                                    </a>
                                    <a id="delete" href="{{route('admin.category.delete', $c->id)}}">
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