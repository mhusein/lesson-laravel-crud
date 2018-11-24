@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST', 'onreset'=>"CKEDITOR.instances.bodyForm.setData( '$post->body', function() { this.updateElement(); } )", 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id'=>'bodyform','class'=> 'form-control', 'placeholder'=> 'Your Content Here'])}}
        </div>
        <div class="form-group">
            <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="height:150px;">
        </div>
        <div class="form-group">
            {{Form::file('cover_image', ['accept'=>'image/*'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
        {{Form::reset('Reset',['class'=> 'btn btn-secondary'])}}
    {!! Form::close() !!}
    <br>
    <br>
    <br>
    <br>
@endsection