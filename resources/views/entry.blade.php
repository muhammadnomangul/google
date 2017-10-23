@extends('welcome')
{{--{{dd($taggs)}}--}}
@section('form')
    <div class="container">
        <form action="fileentry/add" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <br><br><br><br>
            <label>Title
                <input type="text" name="title" />
            </label><br><br>
            <label> Description
            <input type="textarea" name="description" />
            </label><br><br>
            <label> Taggs

                    {{--    {{ $tag->name }}--}}
                <select class="multiple" name="taggs">
                    @foreach($taggs as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                    <option value="AL">Alabama</option>
                    ...
                    <option value="WY">Wyoming</option>
                </select>


            <label>
                <ul class="tags">
                    @foreach($taggs as $tag)
                    <li><a href="#" class="tag">{{$tag->name}}</a></li>
                    @endforeach
                </ul>
                Select File To upload

                <input type="file" name="filefield">
            </label><br><br>
                <input type="submit">
        </form>
    </div>


@endsection
    {{--{!! Form::open(['url' => 'fileentry/add']) !!}--}}
    {{--<!--  input field -->--}}
        {{--<div class="form-group">--}}

            {{--{!! Form::text('name',null,['class'=>'form-control']) !!}--}}

        {{--</div>--}}
    {{--<input type="file" name="filefield">--}}
    {{--<div class="form-group">--}}

        {{--{!! Form::submit('submit', ['class' => 'btn btn-primary form-control btn-submit']) !!}--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
        {{--<!-- Name input field -->--}}


@section('images')
    <h1> Pictures list</h1>

    <div class="row">

        <ul class="thumbnail">
            @foreach($entries as $entry)
                <div class="col-md-2">
                    <div class="gallery">
                        <img src="{{route('getentry', $entry->filename)}}" alt="ALT NAME" class="img-responsive" />
                        <div class="desc">{{$entry->original_filename}}</div>
                        <div class="desc">{{$entry->created_at}}</div>
                        <div class="desc">{{$entry->title}}</div>
                        <div class="desc">{{$entry->description}}</div>
                        <ul class="tags">
                            @foreach($taggs as $tag)
                                <li><a href="#" class="tag">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                    {{--<li>{{$entry->filename}}</li>--}}

                </div>
            @endforeach
        </ul>
    </div>





@endsection
