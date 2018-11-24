@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light my-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" alt="" style="width:100%;height:120px;">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
                
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection        