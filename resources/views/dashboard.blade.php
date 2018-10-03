@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                {{-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <div class="panel-body">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        @if (count($posts)>0)
                            <h2>Your Posts</h2>
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <td><a href="/posts/{{$post->id}}/edit" class='btn btn-default'>Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'<pull-right></pull-right>']) !!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>   
                            @endforeach
                                
                            </table> 
                        @else
                            <br><br>
                            <p>You Do Not Have Any Post.</p>
                        @endif                         
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
