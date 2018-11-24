@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
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
        <div class="row p-3">
            {{Form::submit('Submit',['class'=> 'btn btn-primary mr-2'])}}                        
            {!! Form::close() !!}
            @if (@$defaultImageName != $post->cover_image)
            {!!Form::open(['action' => ['PostsController@destroyImage',$post->id], 'method'=>'POST'])!!} 
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Delete Image', ['class'=>'btn btn-warning'] )}} {!!Form::close()!!}
            @endif
        </div>
    <br>
    <br>
    <br>
    <br>
@endsection