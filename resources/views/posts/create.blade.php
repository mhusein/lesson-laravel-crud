@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=> 'form-control', 'placeholder'=> 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id'=>'bodyform','class'=> 'form-control', 'placeholder'=> 'Your Content Here'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image', ['accept'=>'image/*'])}}
        </div>
        {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
    <br>
    <br> 
@endsection        