@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
  <div class="container">    
        {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'Post Title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Write Your Blog....'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_img')}}
            </div>
            {{Form::submit('Create',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection