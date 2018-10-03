@extends('layouts.app')

@section('content')
        <a class="btn btn-default" href="/posts">Go Back</a>
        <h1>{{$post->title}}</h1>
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_img}}" alt="Image Thumbnail">
        <br><br>
        <h4>{!! $post->body !!}</h4>
        <hr>
        <h6>Written on:  <small>{{$post->created_at}} By {{$post->user->name}}</small></h6>
        <hr>
        @if(!Auth::guest()) 
        @if(Auth::user()->id==$post->user_id)
        <a class="btn btn-default " href="/posts/{{$post->id}}/edit">Edit</a>
        {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'<pull-right></pull-right>']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
        @endif
@endsection