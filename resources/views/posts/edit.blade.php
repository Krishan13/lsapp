@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
  <div class="container">    
        {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Post Title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Write Your Blog....'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_img')}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Update',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection