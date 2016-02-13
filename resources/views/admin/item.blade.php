@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ნივთები</h1>
            <div class="col-md-10">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> ნივთები
                    </li>
                </ol>
            </div>
            <div class="col-md-2">
                <a href="{{route('admin.item.add')}}" ><button class="btn btn-default" style="width: 100%"><i style="float: left; font-size: 22px;" class="fa fa-plus"></i> დამატება</button></a>
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
                            <th>შიგთავსი</th>
                            <th>მოქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($item as $n)
                            <tr>
                                <td>{{$n->id}}</td>
                                <td><img src="{{url()}}/uploads/item/{{$n->main_image}}" style="height:35px;"/></td>
                                <td>{{$n->title_geo}}</td>
                                <td>{!! $n->content_geo !!}</td>
                                <td>
                                    <a href="{{route('admin.review.show', $n->id)}}">
                                        <button class="btn btn-primary" style="width: 32%">მიმოხილვა</button>
                                    </a>
                                    <a href="{{route('admin.item.edit', $n->id)}}">
                                        <button class="btn btn-warning" style="width: 49%">შესწორება</button>
                                    </a>
                                    <a id="delete" href="{{route('admin.item.delete', $n->id)}}">
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
    <script type="text/javascript">
        function showLink(link){
            prompt("დააკოპირეთ ბმული მენიუსთვის", link);
        }
    </script>
@stop