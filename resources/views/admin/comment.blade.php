@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">კომენტარი</h1>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-folder-o"></i>  კომენტარი
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>კომენტარები</h2>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>კომენტარი</th>
                            <th>მოქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comment as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->comment}}</td>
                                <td>
                                    <a id="delete" href="{{route('admin.comment.delete',[Request::segment(3),$a->id])}}">
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
