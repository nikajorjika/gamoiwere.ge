@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ფერები</h1>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-folder-o"></i>  ფერები
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
                <label for="size">დაამატე ზომა:</label>
                <input type="text" name="size" class="form-control" id="size">
            </div>

            <button type="submit" class="btn btn-default">შენახვა</button>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>ზომები</h2>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ზომა</th>
                            <th>მოქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($size as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->size}}</td>
                                <td>
                                    <a id="delete" href="{{route('admin.size.delete',$a->id)}}">
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
