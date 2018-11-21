@extends('layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-md-2 col-xs-12">
            <a href="/lsapp/public/posts" class="btn btn-info btn-block mt-2 mb-2">Go Back</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <h1>{{$post->title}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {!!$post->body!!}
        </div>
    </div>
    
    <hr>
    
    <div class="row">
        <div class="col-md-12">
            <small>Witten on {{$post->created_at}}</small>
        </div>
    </div>

    <hr>
    <div class="row ">
        <div class="col-md-2 col-xs-12">
            <a href="{{$post->id}}/edit" class="btn btn-primary btn-block mt-2 mb-2">Edit</a>
        </div>
        <div class="col-md-2 col-xs-12 offset-md-8">
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-block mt-2 mb-2'])}}
            {!! Form::close() !!}
        </div>
        
        
    </div>
    

    
    
@endsection