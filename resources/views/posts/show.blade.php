@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go Back</a>
    <br><br>
    <h1>{{$post->title}}</h1>    
    <hr>
    <center><img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="height:350px;"></center>
    <br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())           
        @if (Auth::user()->id==$post->user_id) 
        <div class="row">
            <div class="col-md-6">
                <div class="row p-3">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-info mr-2">Edit</a>
                @if ($defaultImageName != $post->cover_image)
                {!!Form::open(['action' => ['PostsController@destroyImage',$post->id], 'method'=>'POST'])!!}
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Delete Image', ['class'=>'btn btn-warning'] )}}
                {!!Form::close()!!}        
                @endif
                                
                </div>
            </div>
            <div class="col-md-6">
                {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST','class'=>'float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete Post', ['class'=>'btn btn-danger '] )}}
                {!!Form::close()!!}
            </div>
        </div>                   
        @endif
    @endif
    <br>
    <br>    
@endsection        