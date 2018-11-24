@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create a Post</a>                    
                    @if (count($posts)>0)                                            
                    <br><br>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>                            
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                            </tr>
                        @endforeach
                        
                    </table>
                    @else
                        <div class="card card-body bg-light my-3">
                            No post yet!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
