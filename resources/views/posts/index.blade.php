@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-2">
            <h1>Posts</h1>
        </div>
    </div>
    
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="row">
                <div class="card col-md-12 mb-3">
                    <div class="card-body ">
                        <h3><a href="/lsapp/public/posts/{{$post->id}}" >{{$post->title}}</a></h3>
                    <small>write on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <!--<div class="row justify-content-center">
            <div class="col-4 ">
                $posts->links()}}
            </div>
        </div>
        -->
            
        </div>

        
        
    @else
        <p>No posts found</p>
    @endif
</div>
@endsection