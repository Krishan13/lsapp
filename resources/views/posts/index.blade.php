@extends('layouts.app')

@section('content')
    @if (count($posts)>0)
        <h1>POSTS</h1>
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_img}}" alt="Image Thumbnail">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                        <small>Written at {{$post->created_at}} By {{$post->user->name}}</small>
                    </div>
                </div>
            </div>    
        @endforeach    
    @else
        <h1>NO POST FOUND!!</h1>        
    @endif
    
@endsection