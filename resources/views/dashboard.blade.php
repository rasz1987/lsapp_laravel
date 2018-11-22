@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <h3>Your Blog Posts</h3>
                        </div>
                    </div>

                    @if(count($posts) > 0)
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a></td>
                                        <td>
                                            
                                                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!! Form::close() !!}
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    @else
                        
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <p>You have no posts</p>
                            </div>
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <a href="posts/create" class="btn btn-primary btn-block">Create Posts</a>
                        </div>
                    </div>
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
