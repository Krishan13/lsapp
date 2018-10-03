@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
       @if (!Auth::guest())
           <h1>Welcome {{Auth::user()->name}}</h1>
       @else
       <h1>Hey! How you Doin</h1>
       <p>This is the practice project for laravel</p>
       <p><a href="/login" role='button' class="btn btn-primary btnlg">Login</a> 
       <a href="/register  " role='button' class="btn btn-success btnlg">Register</a></p> 
       @endif 
    </div>
      
@endsection
   