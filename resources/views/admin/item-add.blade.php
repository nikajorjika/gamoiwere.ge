@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ნივთები</h1>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('admin.item.show')}}"><i class="fa fa-dashboard"></i> ნივთები</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-pencil-square-o"></i> დამატება
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#geo">GEO</a></li>
                    <li><a data-toggle="tab" href="#eng">ENG</a></li>
                    <li><a data-toggle="tab" href="#rus">RUS</a></li>
                </ul>
                @if(!empty($obj))
                    {!! Form::model($obj,['method' => 'post', 'files' => true]) !!}
                @else
                    {!! Form::open(['method' => 'post', 'files' => true]) !!}
                @endif
                {{csrf_field()}}

                @if(!empty($obj))
                    <div class="form-group"><br/>
                        <div class="row">
                            <div class="col-xs-6 col-md-3">
                                <a href="{{url()}}/uploads/item/{{$obj->main_image}}" class="thumbnail">
                                    <img src="{{url()}}/uploads/item/{{$obj->main_image}}">
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-group"><br/>
                    <label for="images">მთავარი სურათი(192x192):</label>
                    <input type="file" name="main_image" class="form-control" id="images">
                </div>
                <div class="form-group"><br/>
                    <label for="big_image">ზუმის სურათი(800x800):</label>
                    <input type="file" name="big_image" class="form-control" id="big_image">
                </div>

                <div class="form-group"><br/>
                    <label for="image">სურათი:</label>
                    <input type="file" name="images[]" class="form-control" id="image" multiple="true">
                </div>
                <div class="form-group">
                    <h3>აირჩიე კატეგორია</h3>
                    <select name="category">
                        <option>აირჩიე კატეგორია</option>
                @foreach($category as $s)
                    <option disabled>{{$s->title_geo}}</option>
                    @if(isset($s->SubCategory[0]))
                        @foreach($s->SubCategory as $sb)
                                <option value="{{$sb->id}}-{{$s->id}}"> {{$sb->title_geo}}</option>
                        @endforeach
                            @endif
                    @endforeach
                    </select>
                    <div>
                        <div class="form-group">
                            <h3>აირჩიე მდებარეობა</h3>
                            {!! Form::checkbox('spec[]', '0') !!}
                            {!! Form::label('spec', 'მხოლოდ შენთვის') !!}
                            {!! Form::checkbox('spec[]', '1') !!}
                            {!! Form::label('spec', 'ცხელი შემოთავაზება') !!}
                            {!! Form::checkbox('spec[]', '2') !!}
                            {!! Form::label('spec', 'მთავარი') !!}
                            {!! Form::checkbox('spec[]', '3') !!}
                            {!! Form::label('spec', 'Top Seller') !!}
                        </div>
                        <div class="form-group">
                            <h3>აირჩიე ფერი</h3>
                            @foreach($color as $c)
                            {!! Form::checkbox('color[]', $c->id) !!}
                            {!! Form::label('color','',['class'=> 'color_admin',"style"=>"background: $c->color; "]) !!}
                        @endforeach
                        </div>
                        <div class="form-group">
                            <h3>აირჩიე ზომა:</h3>
                            @foreach($size as $s)
                            {!! Form::checkbox('color[]', $s->id) !!}
                            {!! Form::label('color',"$s->size") !!}
                        @endforeach
                        </div>
                        <div class="form-group">
                            <label for="price">ფასი:</label>
                            {!! Form::text('price', null,
                                ['required',
                                 'class'=>'form-control',
                                 'id' => 'price']) !!}
                        </div>
                <div class="tab-content">
                    <div id="geo" class="tab-pane fade in active"><br/>
                        <div class="form-group">
                            <label for="title-geo">სათაური [GEO]:</label>
                            {!! Form::text('title_geo', null,
                                ['required',
                                 'class'=>'form-control',
                                 'id' => 'title-geo',
                                 'placeholder'=>'ქართული სათაური']) !!}
                        </div>
                        <div class="form-group">
                            <label for="content-geo">აღწერა [GEO]:</label>
                            {!! Form::textarea('content_geo', null,
                              ['required',
                               'class'=>'form-control',
                               'id' => 'content-geo']) !!}
                        </div>
                    </div>
                    <div id="eng" class="tab-pane fade"><br/>
                        <div class="form-group">
                            <label for="title-eng">სათაური [ENG]</label>
                            {!! Form::text('title_eng', null,
                                ['class'=>'form-control',
                                 'id' => 'title-eng']) !!}
                        </div>
                        <div class="form-group">
                            <label for="content-eng">აღწერა [ENG]:</label>
                            {!! Form::textarea('content_eng', null,
                              ['class'=>'form-control',
                               'id' => 'content-eng']) !!}
                        </div>
                    </div>
                    <div id="rus" class="tab-pane fade"><br/>
                        <div class="form-group">
                            <label for="title-rus">სათაური [RUS]</label>
                            {!! Form::text('title_rus', null,
                              ['class'=>'form-control',
                               'id' => 'title-rus']) !!}
                        </div>
                        <div class="form-group">
                            <label for="content-rus">აღწერა [RUS]:</label>
                            {!! Form::textarea('content_rus', null,
                            ['class'=>'form-control',
                             'id' => 'content-rus']) !!}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-default">შენახვა</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('content-geo');
        CKEDITOR.replace('content-eng');
        CKEDITOR.replace('content-rus');
    </script>
@stop